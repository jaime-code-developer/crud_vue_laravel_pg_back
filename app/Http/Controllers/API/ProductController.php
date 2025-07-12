<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        return Product::all();
    }

    public function store(Request $request) {
        return Product::create($request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]));
    }

    public function show($id) {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update($request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]));
        return $product;
    }

    public function destroy($id) {
        return Product::destroy($id);
    }
}
