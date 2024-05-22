@extends('templates.base')

@section('title', 'Store - Edit')

@section('content')
    <h1 class="mt-4">Edit</h1>
    <form method="POST" action="{{ route('products.update', ['id' => $product]) }}">
        @method('PUT')
        @csrf
        <div class="mb-3 w-75">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
        </div>
        
        <div class="mb-3 w-25">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
        </div>

        <div class="mb-3 w-75">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $product->description}}">
        </div>

        <div class="mb-3 w-75">
            <label for="img" class="form-label">Image url</label>
            <input type="text" class="form-control" id="img" name="img" value="{{ $product->img }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

