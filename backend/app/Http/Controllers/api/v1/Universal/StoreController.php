<?php

namespace App\Http\Controllers\api\v1\Universal;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use App\Models;

class StoreController extends Controller
{
    public function __invoke($model, Request $request): JsonResponse
    {
        $modelInstance = new $model();
        $modelName = $model;
        $model = "App\Models\\" . $model;
        $response = [];       //массив для записи хода создания и добавления сущности

        if (class_exists($model)) {
            $data = $request->input($modelName);
            if ($data) {
                foreach ($data as $object) {
                    $hasError = false;
                    $attachmentsArray = [];             //массив  для связанных сущностей
                    $modelInstance = new $model();      //создаем пустой инстанс заданной модели

                    foreach ($object as $field => $value) {
                        if (!is_array($value)) {
                            //Проверка на существания такого атрибута в модели и добавление его в инстанс модели
                            $columns = Schema::getColumnListing($modelInstance->getTable());
                            if (in_array($field, $columns)) {
                                $modelInstance->setAttribute($field, $value);
                            } else {
                                $response[] = ['error' => sprintf('Field %s does not exist in model %s.', $field, $modelName), 'code' => '415'];
                                $hasError = true;
                            }
                        } else {
                            foreach ($value as $linkedValue) {
                                //создание связи с другой сущностью
                                if (class_exists("App\Models\\" . $field)) {
                                    if (Str::isUuid($linkedValue)) {
                                        $attachmentsArray[$linkedValue] =
                                            [
                                                'id' => Str::uuid(),
                                                'author' => Auth::guard('sanctum')->user()['user'],
                                                'validFrom' => date("Y-m-d H:i:s", time()),
                                                'created_at' => date("Y-m-d H:i:s", time()),
                                                'updated_at' => date("Y-m-d H:i:s", time()),
                                            ];
                                    } else {
                                        $response[] = ['error' => sprintf('Cant add related entity %s', $linkedValue), 'code' => '415'];
                                        $hasError = true;
                                    }
                                } else {
                                    $response[] = ['error' => sprintf('Related model %s does not exist', $field), 'code' => '415'];
                                    $hasError = true;
                                }
                            }
                        }
                    }
                    $modelInstance->setAttribute('author', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac');

                    if (!$hasError) {
                        DB::beginTransaction();
                        try {
                            // Сохранение модели
                            $modelInstance->save();
                            $response[] = ['message' => sprintf('Entity %s with id %s has been added', $modelName, $modelInstance['id']), 'code' => '200'];

                            // Сохранение связей
                            foreach ($attachmentsArray as $attachmentId => $attachment) {
                                $modelInstance->vacancies()->attach($attachmentId, $attachment);
                                $response[] = ['message' => sprintf('Relationship %s with %s has been added', $modelInstance['id'], $attachmentId), 'code' => '200'];
                            }
                            DB::commit();
                        } catch (\Exception $e) {
                            DB::rollback();
                            $response[] = ['error' => $e->getMessage(), 'code' => '500'];
                        }
                    }

                    unset($attachment);
                    unset($attachmentsArray);
                    unset($attachmentId);
                    unset($hasError);
                }
            } else $response[] = ['error' => sprintf('No %s model data in request', $modelName), 'code' => '400'];
        } else $response[] = ['error' => sprintf('Model %s not found', $model), 'code' => '400'];

        return response()->json($response, 200);
    }
}
