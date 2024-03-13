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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/painel', App\Http\Livewire\Painel::class)->name('painel.dashboard');

Route::get('/site/listar', App\Http\Livewire\Site\ListarSites::class)->name('site.listar');
Route::get('/site/criar', App\Http\Livewire\Site\AdicionarSites::class)->name('site.criar');
