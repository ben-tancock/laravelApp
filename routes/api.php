<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/test', [MyController::class, 'testAPI']);
Route::get('/test', [MyController::class, 'testAPI']);
Route::get('/service', [MyController::class, 'getServiceOfferings']);

// Route::get('/test', [
//     'as' => 'testAPI',
//     'uses' => 'MyController@testAPI'
// ]);

// Route::post('/testpost', [
//     'as' => 'testAPI',
//     'uses' => 'MyController@testAPI'
// ]);