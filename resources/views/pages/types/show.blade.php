@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-lg-8 ">
            <div class="pull-left">
                <h2> Show types</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('typess.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $types->name }}
            </div>
        </div>

    </div>
@endsection
