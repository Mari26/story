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

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
