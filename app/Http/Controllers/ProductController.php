<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {


        Product::create(
            [
                "name" => $request->name,
                "quantity" => $request->quantity,
                "description" => $request->description
            ]
        );
        return redirect('/products');
    }
}
