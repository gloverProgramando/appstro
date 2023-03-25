<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\crudcontroller;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
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
    return view('index');
});

Route::get('/login', [crudcontroller::class, 'ver'])
    ->name('login');

Route::get('/tipos_astros',[crudcontroller::class, 'ver_tipos'])
    ->name('tipos_astros');

Route::get('/ver_planetas',[crudcontroller::class, 'ver_planetas'])
    ->name('planetas');
?>


