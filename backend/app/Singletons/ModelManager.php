<?php
namespace App\Singletons;

use ReflectionException;

class ModelManager
{
    private static ?ModelManager $instance = null;
    private array $models = [];
    private array $resources = [];

    private function __construct() {}

    public static function getInstance():ModelManager {
        if (!self::$instance) {
            self::$instance = new ModelManager();
            self::$instance->init();
        }
        return self::$instance;
    }

    /**
     * @throws ReflectionException
     */
    private function init():void{
        //Определяем директории, в которых находятся модели и ресурсы
        $modelsPath = 'Models/DBModels/Data';
        $resourcesPath = app_path('Resources');

        $this->scanModels($modelsPath);
    }

    /**
     * @throws ReflectionException
     */
    private function scanModels(String $path):void {
        // Сканируем директорию и получаем список файлов
        $files = scandir(app_path($path));

        // Проходим по списку файлов и определяем, какие из них являются моделями
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            //$filePath = $path . DIRECTORY_SEPARATOR . $file;

            //Получаем информации о классе
            $modelName = pathinfo($file, PATHINFO_FILENAME);
            $modelPath = 'App\\' . str_replace('/', '\\', $path) . '\\';

            //dump($classPath . $className);
            //dump($filePath);
            $model = new \ReflectionClass($modelPath . $modelName);
            // Если класс является моделью, то добавляем его в список моделей
            if ($model->isSubclassOf('Illuminate\Database\Eloquent\Model')) {
                $this->models[$modelName] = $model->newInstance();

                // Сканируем ресурсы для данной модели
                $this->scanResources($path, $modelName);
            }
        }
        dd($this->models);
    }

    private function scanResources($path, $modelName):void {
        // Определяем путь к директории с ресурсами для данной модели
        $resourcePath = $path . DIRECTORY_SEPARATOR . $modelName . DIRECTORY_SEPARATOR . 'Resources';

        // Если директория с ресурсами не существует, то выходим из метода
        if (!is_dir($resourcePath)) {
            return;
        }

        // Сканируем директорию с ресурсами и добавляем ресурсы в список для данной модели
        $files = scandir($resourcePath);
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            $resourceName = pathinfo($file, PATHINFO_FILENAME);
            $resourceClass = 'App\Models\\' . $modelName . '\\Resources\\' . $resourceName;

            // Используем рефлексию для проверки, существует ли класс ресурса
            if (class_exists($resourceClass)) {
                $this->resources[$modelName][$resourceName] = new $resourceClass();
            }
        }
    }
}
