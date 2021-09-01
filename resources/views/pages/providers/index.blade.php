@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 ">
            <div class="pull-left">
                <h2>providers</h2>
            </div>
            <div class="d-flex justify-content-end mb-3 mr-3">
                <a class="btn btn-success" href="{{ route('providers.create') }}"> Create New Provider</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>id</th>

            <th>name</th>

        </tr>
        @foreach ($providers as $provider)
            <tr>
                <td>{{ $provider->id}}</td>
                <td>{{ $provider->name}}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('providers.show',$provider->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('providers.edit',$provider->id) }}">Edit</a>
                    <form action="{{ route('providers.destroy',$provider->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
