<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $categories = Category::all();
    return view('admin.products.create', compact('categories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name'        => 'required|string|max:255',
        'slug'        => 'required|unique:products',
        'description' => 'nullable|string',
        'price'       => 'nullable|numeric',
        'category_id' => 'required|exists:categories,id',
        'images.*'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Créer le produit
    $product = Product::create($validated);

    // Sauvegarder les images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $path = $file->store('products', 'public'); // storage/app/public/products
            $product->images()->create(['image_path' => $path]);
        }
    }

    return redirect()->route('admin.products.index')->with('success', 'Produit ajouté avec succès');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
