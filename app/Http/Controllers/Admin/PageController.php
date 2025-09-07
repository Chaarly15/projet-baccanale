<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::paginate(10);
        return view('admin.pages.index', compact('pages'));
    }


    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug'  => 'required|unique:pages',
            'body'  => 'required|string',
        ]);

        Page::create($validated);

        return redirect()->route('admin.pages.index')->with('success', 'Page ajoutée avec succès');
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
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Page $page)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug'  => 'required|unique:pages,slug,'.$page->id,
            'body'  => 'required|string',
        ]);

        $page->update($validated);

        return redirect()->route('admin.pages.index')->with('success', 'Page mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page supprimée');
    }
}
