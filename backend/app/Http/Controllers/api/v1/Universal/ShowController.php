<?php

namespace App\Http\Controllers\api\v1\Universal;

use App\Http\Resources\api\v1\DUsersDefaultResource;
use App\Singletons\ModelManager;
Use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DBModels\Data;

class ShowController extends Controller
{
    public function __invoke($apiName, $id): JsonResponse {

        $modelManager = app(ModelManager::class);

        $modelName = array_search($apiName, app('models'));
        if ($modelName) {
            $model = ("App\\Models\\DBModels\\Data\\".$modelName)::find($id);
            $response = new DUsersDefaultResource($model);
            //if ($model) {
                //$modelMethods = get_class_methods($model);

                /*foreach ($modelMethods as $method) {

                    //$relationship = $model->{$method}();
                    if (Str::contains($method, "rel")) {
                        switch (true) {
                            case $model->{$method}() instanceof BelongsToMany:
                                dump($method);
                                break;
                            default:
                                break;
                        }
                    }
                }*/

                //$response = response()->json(['error' => sprintf("%s with id:%s not found", $modelName, $id)], 400);
            //} else $response = response()->json(['data' => $data], 200);
        } else $response = response()->json(['error' => sprintf('%s model does not exist', $apiName)], 400);

        return response()->json($response, 200);
    }
}
