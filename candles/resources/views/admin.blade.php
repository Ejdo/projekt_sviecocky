@extends('html_template')

@section('content')
<main class="container my-5">
    <section class="row">
      <div class="col">
        <h1>Admin Panel</h1>
        <hr class="border-3 opacity-50" />
      </div>
    </section>
    <section class="row">
        <div class="container">
            <h2>Product List</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>EAN</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Trending</th>
                        <th>Discount</th>
                        <th>Stock</th>
                        <th>Burn Hours</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->ean_code }}</td>
                            <td><a href="{{ route('product_detail', ['id'=>$product->id]) }}">{{ $product->name }}</a></td>
                            <td>{{ $product->color }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->trending }}</td>
                            <td>{{ $product->discount }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->burn_hours }}</td>
                            <td><a href="{{ route('product.edit', ['id'=>$product->id]) }}">Edit</a></td>
                            <td><a href="{{ route('product.delete', ['id'=>$product->id]) }}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Create New Product</a>
        </div>
    </section>
</main>
@endsection