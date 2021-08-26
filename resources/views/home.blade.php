@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">deshboard</div>

                <div class="card-body">
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

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
                                <h2>Laravel 8 CRUD Example from scratch </h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href=""> Create New Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
