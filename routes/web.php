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
Route::get('/redirect', [App\Http\Controllers\PrincipalController::class, 'redirect'])->name('site.redirect');
Route::get('/contact', [App\Http\Controllers\PrincipalController::class, 'contact'])->name('site.contato');

//Rotas do Controller User
Route::get('/register', [App\Http\Controllers\UserController::class, 'register'])->name('site.register');
Route::get('/recover', [App\Http\Controllers\UserController::class, 'recover'])->name('site.recover');
Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('site.login');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('site.logout');

//Rotas do Controller Link
Route::prefix('app')->group(function(){
    Route::get('/generate', [App\Http\Controllers\LinkController::class, 'generate'])->name('app.generate');
    Route::get('/list', [App\Http\Controllers\LinkController::class, 'list'])->name('app.list');
    Route::get('/remove', [App\Http\Controllers\LinkCOntroller::class, 'remove'])->name('app.remove');
});

