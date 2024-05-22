@extends('templates.base')

@section('title', 'Store - Add Product')

@section('content')
    <h1>Add Product</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="mb-3 w-75">
            <label for="title" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3 w-25">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3 w-75">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

        
    </form>
@endsection
