@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">deshboard</div>

                <div class="card-body">
                   @if (session('status'))
                       <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                        </div>
                   @endif

                        @can('is_admin')
                            <div class="btn btn-success btn-lg">
                                Hello, Admin
                            </div>
                        @else
                            <div class="btn btn-info btn-lg">
                                Hello, User
                            </div>
                        @endcan
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>CANDY STORE</h2>
                            </div>

                    </div>
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

                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
