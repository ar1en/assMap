<?php

namespace App\Http\Controllers\api\v1\Universal;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoreController2 extends Controller
{
    public function __invoke(String $modelName, Request $request): JsonResponse
    {
        if (class_exists("App\Models\\{$modelName}")) {
            $response = DB::transaction(function () use ($request, $modelName) {
                $model = new ("App\Models\\{$modelName}")();
                $validatedData = $request->validate($model->getValidationRules());

                $model->fill(array_merge($validatedData, [
                    'author' => Auth::guard('sanctum')->user()['user']
                ]));

                $model->save();

                foreach ($validatedData as $key => $value) {
                    if (method_exists($model, $key)) {
                        $this->setRelationship($model, $key, $value);
                    }
                }

                return $model;
            });
        } else $response = sprintf('%s model does not exist', $modelName);

        return response()->json($response, 200);
    }

    private function setRelationship(&$model,$key, $value): void{
        $relationship = $model->{$key}();
        switch (true) {
            case $relationship instanceof BelongsTo:
                $model->{$key}()->associate($value);
                break;
            case $relationship instanceof BelongsToMany:
                if (is_array($value)){
                    foreach($value as $relatedValue){
                        $this->attachRelatedEntity($model, $key, $relatedValue);
                    }
                } else $this->attachRelatedEntity($model, $key, $value);
                break;
            default:
                break;
        }
    }

    private function attachRelatedEntity(&$model, $key, $value): void{
        $model->{$key}()->attach($value,
            [
                'id' => Str::uuid(),
                'author' => Auth::guard('sanctum')->user()['user'],
                'validFrom' => date("Y-m-d H:i:s", time()),
                'created_at' => date("Y-m-d H:i:s", time()),
                'updated_at' => date("Y-m-d H:i:s", time())
            ]);
    }
}
