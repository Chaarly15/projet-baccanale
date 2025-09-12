@extends('layouts.admin')

@section('title', 'Détails du Document')

@section('content')
<div class="admin-card">
    <div class="card-header-admin">
        <h2 class="card-title-admin">{{ $document->title }}</h2>
        <div>
            <a href="{{ route('admin.documents.edit', $document) }}" class="btn btn-secondary-admin me-2">
                <i class="fas fa-edit me-2"></i>Modifier
            </a>
            <a href="{{ route('admin.documents.index') }}" class="btn btn-secondary-admin">
                <i class="fas fa-arrow-left me-2"></i>Retour à la liste
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h4>Informations générales</h4>
                <table class="table table-admin">
                    <tr>
                        <th>Titre</th>
                        <td>{{ $document->title }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $document->slug }}</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td>
                            @switch($document->type)
                                @case('brochure')
                                    Brochure
                                    @break
                                @case('fiche_technique')
                                    Fiche Technique
                                    @break
                                @case('catalogue')
                                    Catalogue
                                    @break
                                @case('guide')
                                    Guide
                                    @break
                                @default
                                    Autre
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $document->description ?? 'Aucune description' }}</td>
                    </tr>
                    <tr>
                        <th>Statut</th>
                        <td>
                            @if($document->is_active)
                                <span class="badge bg-success">Actif</span>
                            @else
                                <span class="badge bg-secondary">Inactif</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Ordre de tri</th>
                        <td>{{ $document->sort_order }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <h4>Fichier</h4>
                @if($document->file_path)
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-file-pdf fa-3x text-danger mb-3"></i>
                            <h5>{{ $document->file_name }}</h5>
                            <p class="text-muted mb-2">Taille: {{ number_format($document->file_size / 1024 / 1024, 2) }} MB</p>
                            <p class="text-muted mb-3">Type MIME: {{ $document->mime_type }}</p>
                            <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="btn btn-primary">
                                <i class="fas fa-download me-2"></i>Télécharger
                            </a>
                        </div>
                    </div>
                @else
                    <p class="text-muted">Aucun fichier associé</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
