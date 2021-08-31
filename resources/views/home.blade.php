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

                               <p>Hello, Admin</p>

                        @else
                               <p>Hello, User</p>

                        @endcan

                    </div>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        <a class="nav-link" href="#">Consultants</a>
                                        <a class="nav-link" href="#">Products</a>
                                        <a class="nav-link" href="#">Providers</a>
                                        <a class="nav-link" href="#">Types</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
{{--                    <table class="table table-bordered">--}}
{{--                        <tr>--}}
{{--                            <th>provider_id</th>--}}
{{--                            <th>type_id</th>--}}
{{--                            <th>name</th>--}}
{{--                            <th>code</th>--}}
{{--                            <th>price</th>--}}
{{--                            <th>productiontime</th>--}}
{{--                            <th>productionperiod</th>--}}

{{--                        </tr>--}}
{{--                        @foreach ($products as $product)--}}
{{--                            <tr>--}}
{{--                                <td>{{ $product->provider_id}}</td>--}}
{{--                                <td>{{ $product->type_id}}</td>--}}
{{--                                <td>{{ $product->name}}</td>--}}
{{--                                <td>{{ $product->code}}</td>--}}
{{--                                <td>{{ $product->price}}</td>--}}
{{--                                <td>{{ $product->productiontime}}</td>--}}
{{--                                <td>{{ $product->productionperiod}}</td>--}}

{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                    </table>--}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
