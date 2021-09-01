@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-lg-8 ">
            <div class="pull-left">
                <h2>Edit Consultant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('consultants.index') }}"> Back</a>
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

    <form action="{{ route('consultants.update',$consultant->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="container">
            <div class="col-md-8">

                <div class="col-md-8">
                    <div class="form-group">
                        <strong>name:</strong>
                        <input type="text" name="name" value="{{ $consultant->name }}" class="form-control" >
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
