@extends('templates.base')

@section('title', "$product->name - Store")

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <img src="{{ $product->img }}" alt="">

    <h3>Price {{ $product->price }}</h3>

    {{-- @session('creation_success')
        <div class="alert alert-success" role="alert">
            Prodotto creato con successo
        </div>
    @endsession --}}

    
    
@endsection
