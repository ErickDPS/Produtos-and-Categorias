<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

//------------------- Produto -------------------//

Route::get('/produto', [ProdutoController::class, 'index'])
->name('produto.index');

Route::get('/produto/create', [ProdutoController::class, 'create'])
->name('produto.create');

Route::post('/produto/create', [ProdutoController::class, 'store'])
->name('produto.store');

Route::get('/produto/{id}', [ProdutoController::class, 'show'])
->name('produto.show');

Route::get('produto/{id}/edit', [ProdutoController::class, 'edit'])
->name('produto.edit');

Route::put('produto/{id}', [ProdutoController::class, 'update'])
->name('produto.update');

Route::delete('produto/{id}', [ProdutoController::class, 'destroy'])
->name('produto.destroy');

//------------------- Categoria -------------------//

Route::get('/categoria', [CategoriaController::class, 'index'])
->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create'])
->name('categoria.create');

Route::post('/categoria/create', [CategoriaController::class, 'store'])
->name('categoria.store');

Route::get('/categoria/{id}', [CategoriaController::class, 'show'])
->name('categoria.show');

Route::get('categoria/{id}/edit', [CategoriaController::class, 'edit'])
->name('categoria.edit');

Route::put('categoria/{id}', [CategoriaController::class, 'update'])
->name('categoria.update');

Route::delete('categoria/{id}', [CategoriaController::class, 'destroy'])
->name('categoria.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
