@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                        <nav class="nav nav-pills nav-fill">

                                        <a class="nav-link " aria-current="page" href="#">Home</a>
                                        <a class="nav-link " href="{{ route('consultants.index') }}">Consultants</a>
                                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                                        <a class="nav-link" href="{{ route('providers.index') }}">Providers</a>
                                        <a class="nav-link" href="{{ route('types.index') }}">Types</a>

                        </nav>
                <div class="container bg-success mt-4">
{{--                    <h1 class="display-5 text-center" >SWEET STORY</h1>--}}
                    <img src="https://thumbor.thedailymeal.com/HIPdqdq4T7jK6lk3PkXy6zz4rAQ=/870x565/https://www.thedailymeal.com/sites/default/files/slideshows/1871042/2252426/Methodology.jpg" class="rounded mx-auto d-block" alt="...">
                </div >
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
