@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 ">
            <div class="pull-left">
                <h2>types</h2>
            </div>
            <div class="d-flex justify-content-end mb-3 mr-3">
                <a class="btn btn-success" href="{{ route('types.create') }}"> Create New types</a>
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
        @foreach ($typess as $types)
            <tr>
                <td>{{ $types->id}}</td>
                <td>{{ $types->name}}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('types.show',$types->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('types.edit',$types->id) }}">Edit</a>
                    <form action="{{ route('types.destroy',$types->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
