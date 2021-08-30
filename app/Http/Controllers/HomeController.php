<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Models\Types;
use App\Models\Consultant;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $products = Product::all();
        return view('home',compact('products'));
    }

    public function getonsultants($type_id)
    {
        return Types::find($type_id)->consultants;
    }
}
