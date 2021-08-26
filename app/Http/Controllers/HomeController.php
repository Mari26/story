<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use App\Models\Types;
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
        return view('home');
    }

    public function getProducts($provider_id)
    {
        dd($provider_id);
//        return Product::find($provider_id)->products;
    }
//    public function getProviders($product_id)
//    {
//        return Provider::find($product_id)->providers;
//    }
}
