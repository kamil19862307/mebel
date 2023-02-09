<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(6);

        return view('products', [
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        $product_preview = Str::limit($product['description'], 272);

        return view('partials.products.show', [
            'product' => $product,
            'product_preview' => $product_preview,
        ]);
    }
}
