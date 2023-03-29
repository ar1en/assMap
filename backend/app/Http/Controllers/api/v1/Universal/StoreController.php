<?php

namespace App\Http\Controllers\api\v1\Universal;

use App\Models\User;
Use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke($model, Request $request): JsonResponse
    {
        $modelName = $model;
        $model = "App\Models\\" . $model;

        if (class_exists($model)) {
            //$modelInstance = new $model();
            //$fields = $modelInstance->getFillable();
            $data = $request->input($modelName);

            if ($data) {

                foreach ($data as $object) {
                    //создаем пустой инстанс заданной модели
                    $modelInstance = new $model();
                    foreach ($object as $field => $value) {
                        if (!is_array($value)) {
                            //Добавить проверку на существания такого атрибута у модели!
                            //перебираем все поля и по очереди добавляем их в инстанс
                            $modelInstance->setAttribute($field, $value);
                        } else {
                            foreach ($value as $linkedValue) {
                                //создание связи с другой сущностью
                                if (class_exists("App\Models\\" . $field)) {
                                    //$attachmentsArray = [[]];
                                    /*$modelInstance->vacancies()->attach($linkedValue,*/
                                    $attachmentsArray[] =
                                    [
                                        $linkedValue =>
                                        [
                                            'id' => Str::uuid(),
                                            'author' => '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac',     //- заглушка, добавить функцию поиска автора по токену
                                            //validFrom' => date("Y-m-d H:i:s", time()),
                                            'created_at' => date("Y-m-d H:i:s", time()),
                                            'updated_at' => date("Y-m-d H:i:s", time()),
                                        ]
                                    ];
                                }
                                //return response()->json(['message' => sprintf('Model %s not found', $field)], 404);
                            }
                        }
                    }
                    $modelInstance->setAttribute('author', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac');
                    $modelInstance->save();
                    foreach ($attachmentsArray as $attachmentId => $attachment) {
                        dump($attachmentId);
                    }
                    //foreach($attachmentsArray as $attachmentId => $attachment){
                    //    dump($attachment(0,0));
                        //dump($attachmentId);
                        //$modelInstance->vacancies()->attach($attachmentId, $attachment);
                    //dump($attachmentsArray);
                    //$modelInstance->vacancies()->attach($linkedValue
                    //dump(is_array($object['vacancies']));
                }
                return response()->json(['message' => 'ok'], 200);
            }
            return response()->json(['message' => sprintf('No %s model data in request', $modelName)], 404);
            //dd($data);
            //return response()->json(['data' => $model::all()], 200);
            //} else {
            //    return response()->json(['message' => sprintf('Model %s not found', $model)], 404);
            //}
        }
    }
}
