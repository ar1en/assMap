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

/*Роуты авторизации*/
Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\auth'], function(){
    Route::post('/login', 'LoginController')->name('auth.login');
    Route::post('/logout', 'LogoutController')->middleware('auth:sanctum');
    //Route::get('/user', 'UserController')->middleware('auth:sanctum')->middleware('web');
});

/*Route::group(['prefix' => 'users', 'namespace' => 'App\Http\Controllers\api\v1\User', 'middleware' => 'auth:sanctum'], function() {
   Route::get('/', 'IndexController')->name('user.index');
   Route::get('/{id}', 'ShowController')->name('user.show');
   Route::post('/', 'StoreController')->name('user.store');
});*/

/*Группа роутов универсальных контроллеров. Должна располгаться после всех остальных групп контроллеров*/
Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\api\v1\Universal', 'middleware' => 'auth:sanctum'], function() {
   Route::get('/{model}', 'IndexController')->name('universal.index');
   Route::get('{model}/{id}', 'ShowController')->name('universal.show');
   Route::post('/{model}', 'StoreController')->name('universal.store');
});



