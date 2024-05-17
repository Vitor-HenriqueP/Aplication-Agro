@extends('layouts.app')

@section('content')
    <h1>Lista de Produtos</h1>
    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>R$ {{ number_format($product->price, 2, ',', '.') }}</p>
        </div>
    @endforeach
@endsection
