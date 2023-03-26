<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\redirecciones;
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

Route::match(['post','get','delete'],'/editar_usuario/{id}',[crudcontroller::class,'editar_usuario'])
    ->name('editar_usuario');

Route::match(['post','get','delete'],'/registar_usuario',[crudcontroller::class,'añadir_usuario'])
    ->name('resgistrar_usuario');

Route::match(['post','get','delete'],'/registrar_nuevo_astro',[crudcontroller::class,'añadir_planeta'])
    ->name('registrar_planeta');

Route::get('/registrar_usuario_new',[redirecciones::class,'redirection_creación_usuario'])
    ->name('registrar_nuevo_usuario');

Route::get('/registrar_nuevo_astro',[redirecciones::class,'redirection_creación_astro'])
    ->name('registrar_Astro');
?>


