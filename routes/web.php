<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

// Rota para exibir o formulário de criação de produto
Route::get('/products/create', [ProdutoController::class, 'create'])->name('products.create');

// Rota para exibir a lista de produtos
Route::get('/products', [ProdutoController::class, 'index'])->name('products.index');

// Rota para armazenar um novo produto
Route::post('/products', [ProdutoController::class, 'store'])->name('products.store');

// Rota para editar um produto existente
Route::get('/products/{product}/edit', [ProdutoController::class, 'edit'])->name('products.edit');

// Rota para atualizar um produto existente
Route::put('/products/{product}', [ProdutoController::class, 'update'])->name('products.update');

// Rota para excluir um produto
Route::delete('/products/{product}', [ProdutoController::class, 'destroy'])->name('products.destroy');
