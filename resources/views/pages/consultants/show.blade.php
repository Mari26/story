@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-lg-8 ">
            <div class="pull-left">
                <h2> Show consultant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('consultants.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $consultant->name }}
            </div>
        </div>

    </div>
@endsection
