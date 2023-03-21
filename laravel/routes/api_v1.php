<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'users', 'namespace' => 'App\Http\Controllers\api\v1\User'], function() {
   Route::get('/', 'IndexController')->name('user.index');
   Route::get('/{id}', 'ShowController')->name('user.show');
   Route::post('/', 'StoreController')->name('user.store');
});
