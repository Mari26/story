@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-lg-8 ">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="container">
            <div class="col-md-8">
                <div class="form-group">
                    <strong>provider_id:</strong>
                    <input type="text" name="title" value="{{ $product->provider_id }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>type_id:</strong>
                    <input type="text" name="title" value="{{ $product->type_id }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>name:</strong>
                    <input type="text" name="title" value="{{ $product->name }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>code:</strong>
                    <input type="text" name="title" value="{{ $product->code }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>price:</strong>
                    <input type="text" name="title" value="{{ $product->price }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>productiontime:</strong>
                    <input type="text" name="title" value="{{ $product->productiontime }}" class="form-control" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>productionperiod:</strong>
                    <input type="text" name="title" value="{{ $product->productionperiod }}" class="form-control" >
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
