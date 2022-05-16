<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use Hyalto\Models\Core\Service;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Hello World';
});

Route::get('/simple', [MyController::class, 'simpleRequest']);
// Route::get('/simple', [
//     'as' => 'simpleRequest',
//     'uses' => 'MyController@simpleRequest'
// ]);
