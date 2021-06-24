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


//Route::name('altaProducto')->get('/', function () { return view('altaProducto'); });
//Route::name('altaClientes')->get('/', function () { return view('altaClientes'); });
Route::name('index')->get('/', function () { return view('plantilladmin/index'); });






