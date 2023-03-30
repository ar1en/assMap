<?php

namespace App\Http\Controllers\Api\V1\Universal;

use App\Models\Contracts\ModelInterface;
use App\Services\Contracts\ModelServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class StoreController2 extends Controller
{
    /*private ModelServiceInterface $modelService;

    public function __construct(ModelServiceInterface $modelService)
    {
        $this->modelService = $modelService;
    }*/

    public function __invoke(string $model, Request $request): JsonResponse
    {
        $response = [];

        try {
            //$modelInstance = $this->modelService->getModelInstance($model);
            $modelInstance = new $model();
            $data = $request->input($model);

            if (!$data) {
                throw new BadRequestHttpException(sprintf('No %s model data in request', $model));
            }

            foreach ($data as $input) {
                $relatedModels = Arr::except($input, $modelInstance->getFillable());
                $modelInstance->fill($input);

                $this->modelService->validateModel($modelInstance);

                $this->modelService->create($modelInstance);

                if (!empty($relatedModels)) {
                    foreach ($relatedModels as $relationName => $relatedModelIds) {
                        $this->modelService->createRelatedModels($modelInstance, $relationName, $relatedModelIds);
                    }
                }

                $response[] = ['message' => sprintf('Entity %s with id %s has been added', $model, $modelInstance->getId()), 'code' => '200'];
            }
        } catch (BadRequestHttpException | ValidationException $e) {
            $response[] = ['error' => $e->getMessage(), 'code' => '400'];
        } catch (\Throwable $e) {
            $response[] = ['error' => $e->getMessage(), 'code' => '500'];
        }

        return response()->json($response, 200);
    }
}
