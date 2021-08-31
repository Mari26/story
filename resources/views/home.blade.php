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
                                        <a class="nav-link" href="">Consultants</a>
                                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                                        <a class="nav-link" href="#">Providers</a>
                                        <a class="nav-link" href="#">Types</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
