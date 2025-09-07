<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index()
    {
        $products = Product::with('images', 'category')->paginate(12);
        $categories = Category::all();
        return view('frontend.products.index', compact('products', 'categories'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
                          ->with('images', 'category')
                          ->firstOrFail();
        return view('frontend.products.show', compact('product'));
    }

    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products()->with('images')->paginate(12);
        $categories = Category::all();

        return view('frontend.products.index', compact('products', 'categories', 'category'));
    }
}
