<?php

namespace App\Http\Controllers\api\v1\Universal;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models;

class StoreController2 extends Controller
{
    //use Models;
    public function __invoke(String $modelName, Request $request): JsonResponse
    {
        //dd(class_exists("App\Models\\{$modelName}"));
        if (class_exists("App\Models\\{$modelName}")) {
            $model = new ("App\Models\\{$modelName}")();
            $validatedData = $request->validate($model->getValidationRules());

            $model->fill($validatedData);

            foreach ($validatedData as $key => $value) {
                //dump($key);
                //dump(method_exists($model, $key));
                if (method_exists($model, $key)) {
                    $relationship = $model->{$key}();

                    switch (true) {
                        case $relationship instanceof BelongsTo:
                            //$relationship->associate($value);
                            $model->{$key}()->associate($value);
                            break;
                        case $relationship instanceof BelongsToMany:
                            $tmp2 = 1;
                            break;
                    }

                    /*if ($relationship instanceof BelongsTo) {
                        // Обработка связи "BelongsTo"
                        $relatedModel = $relationship->getRelated();
                        $relatedData = $value;
                        $relatedModel->fill($relatedData);
                        $relatedModel->save();
                        $model->{$key}()->associate($relatedModel);
                    } elseif ($relationship instanceof BelongsToMany) {
                        // Обработка связи "BelongsToMany"
                        $relatedModel = $relationship->getRelated();
                        $relatedData = $value;
                        foreach ($relatedData as $relatedValue) {
                            $relatedModel->fill($relatedValue);
                            $relatedModel->save();
                            $model->{$key}()->attach($relatedModel->id);
                        }
                    }*/
                }
            }
            $model->save();
            return response()->json($model, 200);
        } else {
            //ошибка, если запрос к несуществующей модели
        }
        return response()->json('ok', 200);
        //dd($validatedData);
    }
}
