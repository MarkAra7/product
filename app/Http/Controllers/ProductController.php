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


        $product = Product::create(
            [
                "name" => $request->name,
                "quantity" => $request->quantity,
                "description" => $request->description
            ]
        );
        return redirect('/products/' . $product->id . "/show");
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', ['product' => $product]);
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.create', ['product' => $product]);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = [
            "name" => $request->name,
            "quantity" => $request->quantity,
            "description" => $request->description
        ];

        $product->update($data);
        return redirect("/products" . $id . "/show");
    }
}
