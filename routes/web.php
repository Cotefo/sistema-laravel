<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\ClienteController;


use GuzzleHttp\Middleware;

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
    return view('auth.login');
});
/*
Route::get('/cliente', function () {
    return view('cliente.index');
});

Route::get('cliente/create',[ClienteController::class,'create']);
*/

Route::resource('ordens',OrdenController::class)->middleware('auth');

Route::resource('cliente',ClienteController::class)->middleware('auth');
Auth::routes(['register'=>false, 'reset'=>false]);



Route::group(['middleware'=>'auth'],function(){

    Route::get('/home', [ClienteController::class, 'index'])->name('home');
});


Route::name('imprimir')->get('cliente/pdf', 'Controller@imprimir');