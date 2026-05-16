<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('admin.create-product');
    }

    public function store(Request $request)
    {
        Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

        return redirect()->route('product.index');
    }
}