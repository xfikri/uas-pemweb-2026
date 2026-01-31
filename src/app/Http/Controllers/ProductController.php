<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Menampilkan seluruh produk yang tersedia
     */
    public function index()
    {
        $products = Product::where('is_available', true)
            ->latest()
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $products
        ]);
    }

    /**
     * Menampilkan detail produk
     */
    public function show($id)
    {
        $product = Product::where('is_available', true)
            ->findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data' => $product
        ]);
    }
}
