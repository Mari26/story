<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function delete()
    {
        if (!Gate::allows('is_admin')) {
            abort(403);
        }
    }

    public function show()
    {
        if (Gate::denies('is_user')) {
            abort(403);
        }
    }

}
