<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Product;


class DashboardController extends Controller
{
    public function index()
    {
        // Statistiques générales
        $stats = [
            'products' => Product::count(),
            'categories' => Category::count(),
            'pages' => Page::count(),
            'faqs' => Faq::count(),
            'documents' => Document::count(),
            'contacts' => Contact::count(),
            'recent_contacts' => Contact::where('created_at', '>=', now()->subDays(7))->count(),
        ];

        // Derniers éléments ajoutés
        $recent = [
            'products' => Product::latest()->take(5)->get(),
            'contacts' => Contact::latest()->take(5)->get(),
            'pages' => Page::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats', 'recent'));
    }
}
