<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controller;

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

Route::get('/', Controller\Root::class);
Route::get('/about', Controller\AboutMe::class);
Route::resources([
    'portofolio' => Controller\PortofolioController::class
]);

Route::get('login', [Controller\Auth\AuthController::class, 'loginPage']);
Route::post('login', [Controller\Auth\AuthController::class, 'login']);

Route::group(['prefix' => 'admin-panel', 'middleware' => 'auth'], function () {
    // Route::get('dahsboard', [Controller\Dashboard])
});
