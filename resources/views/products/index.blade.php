@extends('templates.base')

@section('title', 'Store - Index of Products')

@section('content')

<div class="d-flex">
    <h1 class="mt-4">Products list</h1>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0bRQLJj4SxReFTme5iHs5g6jZwSsQSIMltnELs4tfvw&s" alt="" style="width: 80px" class="ms-auto">
</div>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($products->count())
        <table class="table table-striped border">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td><a href="{{ route('products.show', ['id' => $product->id]) }}">{{ $product->name }}</a></td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        
                        @auth
                       <td>
                           @if (Auth::user()->id === $product->user_id)
                           
                           <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST" style="display:inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm mb-2 w-100">Delete</button>
                        </form>
                        <a class="btn btn-secondary btn-sm w-100" href="{{ route('products.edit', ['id' => $product->id]) }}">Edit</a>
                        @endif
                    </td>
                    @endauth
                    
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    @else
        <h2>Nessun prodotto</h2>
    @endif
@endsection
