<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;

// Defina a rota raiz corretamente com o nome 'helloworld'
Route::get('/', [IndexController::class, 'index'])->name('helloworld');

// Fallback para páginas não encontradas
Route::fallback(function (){
    return view('404');
});

Route::get('/produtos', [IndexController::class, 'produtos'])->name('produtos');

Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/contato', [IndexController::class, 'contato'])->name('contato');
