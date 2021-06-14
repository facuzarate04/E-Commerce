<?php

use App\Http\Controllers\CustomRedirectController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/socio', function () {return view('socio');})->name('socio');
Route::get('/socio/register/vendedor', function () {return view('auth.vendedor-register');})->name('register-vendedor');
Route::get('/socio/register/repartidor', function () {return view('auth.repartidor-register');})->name('register-repartidor');



Route::group(['middleware' => ['auth:sanctum','verified']], function () {

//Redirect
Route::get('/redirect', [CustomRedirectController::class,'index'])->name('redirect');

//Compradores 
Route::group(['middleware' => ['comprador']], function () {

Route::get('/dashboard', [LocalController::class,'index'])->name('dashboard');
Route::post('/user/complete-information',[UserController::class,'update'])->name('user.update');
Route::get('/user/mis-pedidos', function () {return view('mis-pedidos');})->name('mis-pedidos');
Route::get('/local/{local}-{name}', [LocalController::class,'show'])->name('local.show');
Route::get('/user/mi-pedido', [PedidoController::class,'create'])->name('mi-pedido');
Route::post('/confirmar-pedido', [PedidoController::class,'store'])->name('confimar.pedido');

});

//Vendedores
Route::group(['middleware' => ['vendedor']], function () { 

Route::get('/dashboard-vendedor', function () {return view('vendedor.dashboard-vendedor');})->name('dashboard-vendedor');
Route::post('/crear-local', [LocalController::class, 'store'])->name('crear.local');
Route::post('/crear-producto', [ProductoController::class , 'store'])->name('crear.producto');
Route::post('/editar-producto{producto}', [ProductoController::class , 'update'])->name('editar.producto');
Route::post('/update-pedido{pedido}', [PedidoController::class , 'update'])->name('update.pedido');

});

//Repartidores
Route::group(['middleware' => ['repartidor']], function () { 

Route::get('/dashboard-repartidor', function () {return view('repartidor.dashboard-repartidor');})->name('dashboard-repartidor');   
Route::get('/entregas-pendientes', [PedidoController::class,'pendientes'])->name('mis-pendientes');   
Route::get('/mis-entregas', [PedidoController::class,'historial'])->name('mis-deliverys');   

});

//Admins
Route::group(['middleware' => ['admin']], function () {

Route::get('/dashboard-admin', function () {return view('admin.dashboard-admin');})->name('dashboard-admin');
Route::post('/update-local{local}', [LocalController::class , 'update'])->name('update.local');

});

});
