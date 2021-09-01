@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-lg-8 ">
            <div class="">
                <h2>Add New Product</h2>
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

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="container">
            <div class="col-md-8">
                <div class="form-group">
                    <strong>provider_id:</strong>
                    <input type="text" name="provider_id" class="form-control" value="2" placeholder=" ">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>type_id:</strong>
                    <input type="text" name="type_id" class="form-control" placeholder=" " value="3" >
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    <strong>code:</strong>
                    <input type="text" name="code" class="form-control" placeholder="number">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>price:</strong>
                    <input type="text" name="price" class="form-control" placeholder="number">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>productiontime:</strong>
                    <input type="text" name="productiontime" class="form-control" placeholder="number">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>productionperiod:</strong>
                    <input type="text" name="productionperiod" class="form-control" placeholder="number">
                </div>
            </div>

            <div class="col-md-8 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
