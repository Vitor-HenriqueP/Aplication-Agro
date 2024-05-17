<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Exibir a lista de produtos
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Exibir o formulário de criação de produto
    public function create()
    {
        return view('products.create');
    }

    // Armazenar um novo produto
    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        // Criar um novo produto
        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Produto criado com sucesso!');
    }

    // Exibir o formulário de edição de produto
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Atualizar um produto existente
    public function update(Request $request, Product $product)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        // Atualizar o produto
        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso!');
    }

    // Excluir um produto
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produto excluído com sucesso!');
    }
}
?>
