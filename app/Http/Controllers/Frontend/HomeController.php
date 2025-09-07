<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        // Derniers 6 produits ajoutés
        $products = Product::with('images')->latest()->take(6)->get();

        // Liste des catégories
        $categories = Category::all();

        return view('frontend.home', compact('products', 'categories'));
    }
}
