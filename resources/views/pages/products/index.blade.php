@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 ">
            <div class="pull-left">
                <h2>products</h2>
            </div>
            <div class="d-flex justify-content-end mb-3 mr-3">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>provider_id</th>
            <th>type_id</th>
            <th>name</th>
            <th>code</th>
            <th>price</th>
            <th>productiontime</th>
            <th>productionperiod</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->provider_id}}</td>
                <td>{{ $product->type_id}}</td>
                <td>{{ $product->name}}</td>
                <td>{{ $product->code}}</td>
                <td>{{ $product->price}}</td>
                <td>{{ $product->productiontime}}</td>
                <td>{{ $product->productionperiod}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
