<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentationController extends Controller
{
    public function index()
    {
        $documents = Document::ordered()
            ->get()
            ->groupBy('type');

        return view('frontend.documentation.index', compact('documents'));
    }

    public function show($slug)
    {
        $document = Document::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('frontend.documentation.show', compact('document'));
    }

    public function download($slug)
    {
        $document = Document::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Increment download count
        $document->incrementDownloadCount();

        // Check if file exists
        if (!Storage::exists($document->file_path)) {
            abort(404, 'Fichier non trouvé');
        }

        return Storage::download($document->file_path, $document->file_name);
    }

    public function byType($type)
    {
        $documents = Document::active()
            ->byType($type)
            ->ordered()
            ->get();

        $typeDisplay = [
            'brochure' => 'Brochures',
            'fiche_technique' => 'Fiches techniques',
            'catalogue' => 'Catalogues',
            'guide' => 'Guides',
            'autre' => 'Autres documents',
        ];

        $title = $typeDisplay[$type] ?? 'Documents';

        return view('frontend.documentation.by-type', compact('documents', 'type', 'title'));
    }
}
