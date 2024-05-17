@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="description">Descrição:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <label for="price">Preço:</label>
        <input type="number" step="0.01" name="price" id="price" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
@endsection

