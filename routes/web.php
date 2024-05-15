<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Rotas do Controller Principal
Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/redirect', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.redirect');
Route::get('/contact', [App\Http\Controllers\PrincipalController::class, 'contact'])->name('site.contato');

//Rotas do Controller User
Route::get('/register', [App\Htpp\Controllers\UserController::class, 'redirect'])->name('site.redirect');
Route::get('/recover', [App\Http\Controllers\UserController::class, 'recover'])->name('site.recover');
Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('site.login');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('site.logout');

//Rotas do Controller Link
Route::get('/generate', [App\Http\Controllers\LinkController::class, 'generate'])->name('site.generate');
Route::get('/list', [App\Http\Controllers\LinkController::class, 'list'])->name('site.list');


Route::prefix('app')->group(function(){
    Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produtos'])->name('app.produtos');
});

