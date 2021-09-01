@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-lg-12 ">
            <div class="pull-left">
                <h2>consultant</h2>
            </div>
            <div class="d-flex justify-content-end mb-3 mr-3">
                <a class="btn btn-success" href="{{ route('consultants.create') }}"> Create New Consultant</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="col-md-12">
    <table class="table table-bordered">
        <tr>
            <th>id</th>

            <th>name</th>

        </tr>
        @foreach ($consultants as $consultant)
            <tr>
                <td>{{ $consultant->id}}</td>
                <td>{{ $consultant->name}}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('consultants.show',$consultant->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('consultants.edit',$consultant->id) }}">Edit</a>

                    <form action="{{ route('consultants.destroy',$consultant->id) }}" method="POST" class="mr-6">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection
