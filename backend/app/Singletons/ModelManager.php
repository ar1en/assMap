<?php
namespace App\Singletons;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\NoReturn;
use ReflectionException;

class ModelManager
{
    private static ?ModelManager $instance = null;
    private array $modelsMetaData = [];
    private static string $modelsPath = 'Models/DBModels/Data';
    private static string $resourcesPath = 'Http/Resources/api/v1';
    private static string $requestsPath = 'Http/Requests';

    private function __construct() {}

    /**
     * @throws ReflectionException
     */
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
    #[NoReturn]
    private function init():void {
        // Сканируем директорию и получаем список файлов
        $files = scandir(app_path(self::$modelsPath));

        // Проходим по списку файлов и определяем, какие из них являются моделями
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            //Получаем информации о классе и формируем путь по которому он доступен для создания
            $modelName = pathinfo($file, PATHINFO_FILENAME);
            $modelPath = 'App\\' . str_replace('/', '\\', self::$modelsPath) . '\\';

            $model = new \ReflectionClass($modelPath . $modelName);
            // Если класс является моделью, то добавляем его в список моделей
            if ($model->isSubclassOf('Illuminate\Database\Eloquent\Model')) {

                $this->modelsMetaData[$modelName] = [
                    'api' => Str::kebab(substr($modelName, 1)),
                    'instancePath' => $modelPath . $modelName,
                    'resources' => $this->getModelData($modelName, 'Resources'),
                    'requests' => $this->getModelData($modelName, 'Requests'),
                    ];
            }
        }
        //dd($this->modelsMetaData);
    }

    /**
     * @throws ReflectionException
     */

    private function getModelData($modelName, $dataType):array {
        $result= [];

        switch ($dataType) {
            case 'Resources':
                $path = self::$resourcesPath;
                $class = 'Illuminate\Http\Resources\Json\JsonResource';
                $classPostfix = 'Resource';
                break;
            case 'Requests':
                $path = self::$requestsPath;
                $class = 'Illuminate\Foundation\Http\FormRequest';
                $classPostfix = 'Request';
                break;
            default:
                return $result;
        }

        $files = scandir(app_path($path));

        foreach ($files as $file) {
            if ($file == '.' || $file == '..') continue;

            $dataName = pathinfo($file, PATHINFO_FILENAME);
            $dataPath = 'App\\' . str_replace('/', '\\', $path) . '\\';

            if (Str::startsWith($dataName, $modelName)) {
                $resource = new \ReflectionClass($dataPath . $dataName);
                if ($resource->isSubclassOf($class)) {
                    $result += [str_replace([$modelName, $classPostfix], '', $dataName) => $dataName];
                }
            }
        }
        return $result;
    }

    public function getModelNameByApi(string $api): ?string {
        foreach ($this->modelsMetaData as $modelName => $modelData) {
            if ($modelData['api'] === $api) {
                return $modelName;
            }
        }
        return null;
    }

    public function modelExistsByApi(string $api): bool {
        return $this->getModelNameByApi($api) !== null;
    }

    public function getModelInstancePath(string $modelName):?string {
        return $this->modelsMetaData[$modelName]['instancePath'];
    }

    public function createModel(string $modelName) {
        return ($this->getModelInstancePath($modelName))::all();
    }

    public function getModelResource($model, String $resourceName):JsonResource {
        //dd($model);
        $path = 'App\\' . str_replace('/', '\\', self::$resourcesPath) . '\\';
        $resourceInstanceName = $this->modelsMetaData[$model->name()]['resources'][$resourceName];
        return new ($path . $resourceInstanceName)($model);
    }
}
