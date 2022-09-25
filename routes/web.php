<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\RestaController;
use App\Http\Controllers\MultiplicacionController;
use App\Http\Controllers\DivisionController;

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
    return view('datos');
})->name('oper');

Route::get('suma',[SumaController::class,'vistaSuma'])->name('suma');

Route::get('resta',[RestaController::class,'vistaResta'])->name('resta');
Route::post('resta',[RestaController::Class,'mostrarResta'])->name('resta');

Route::get('division',[DivisionController::class,'vistaDivision'])->name('division');
Route::get('multiplicacion',[MultiplicacionController::class,'vistaMultiplicacion'])->name('multiplicacion');

