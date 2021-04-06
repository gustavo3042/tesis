<?php

use Illuminate\Support\Facades\Route;

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


//Route::resource('empleados','EmpleadosController');


//Route::get('/', function (){
//return view('bienvenido');
//});

Route::get('/', function (){
return view('auth.login');
});



Route::resource('layout','App\Http\Controllers\SidebarController');

Route::resource('empleados','App\Http\Controllers\EmpleadosController')->middleware('auth');


Auth::routes(['register'=>false,'reset'=>false]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes(['register'=>false,'reset'=>false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('trabajos','App\Http\Controllers\TrabajosController');

Route::get('/bar-chart', [App\Http\Controllers\ChartController::class, 'barChart']);


//Route::get('/bar-chart', [App\Http\Controllers\ChartController::class, 'Suma']);

//Route::resource('/bar-chart','App\Http\Controllers\ChartController');

/*

Route::get('/', function (){
return view('index');
});
*/
