@extends('layouts.admin')

@section('title', 'Documents')

@section('content')
<div class="admin-card">
    <div class="card-header-admin d-flex justify-content-between align-items-center">
        <h2 class="card-title-admin mb-0">
            <i class="fas fa-file-alt me-2"></i>Gestion des Documents
        </h2>
        <a href="{{ route('admin.documents.create') }}" class="btn btn-primary-admin">
            <i class="fas fa-plus me-2"></i>Ajouter un document
        </a>
    </div>

    <div class="card-body">
        <!-- Search and Filters -->
        <div class="row mb-4">
            <div class="col-md-6">
                <form method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Rechercher par titre..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="col-md-6">
                <form method="GET" class="d-flex justify-content-end">
                    <select name="type" class="form-select me-2" onchange="this.form.submit()">
                        <option value="">Tous les types</option>
                        <option value="brochure" {{ request('type') == 'brochure' ? 'selected' : '' }}>Brochure</option>
                        <option value="fiche_technique" {{ request('type') == 'fiche_technique' ? 'selected' : '' }}>Fiche Technique</option>
                        <option value="catalogue" {{ request('type') == 'catalogue' ? 'selected' : '' }}>Catalogue</option>
                        <option value="guide" {{ request('type') == 'guide' ? 'selected' : '' }}>Guide</option>
                        <option value="autre" {{ request('type') == 'autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                    <select name="status" class="form-select" onchange="this.form.submit()">
                        <option value="">Tous les statuts</option>
                        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Actif</option>
                        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactif</option>
                    </select>
                </form>
            </div>
        </div>

        @if($documents->count() > 0)
            <div class="table-responsive">
                <table class="table table-admin table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th><i class="fas fa-heading me-1"></i>Titre</th>
                            <th><i class="fas fa-tag me-1"></i>Type</th>
                            <th><i class="fas fa-align-left me-1"></i>Description</th>
                            <th><i class="fas fa-toggle-on me-1"></i>Statut</th>
                            <th><i class="fas fa-cogs me-1"></i>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documents as $document)
                            <tr>
                                <td>
                                    <strong>{{ $document->title }}</strong>
                                    @if($document->file_path)
                                        <br><small class="text-muted">{{ $document->file_name }}</small>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-info">
                                        @switch($document->type)
                                            @case('brochure')
                                                <i class="fas fa-book-open me-1"></i>Brochure
                                                @break
                                            @case('fiche_technique')
                                                <i class="fas fa-tools me-1"></i>Fiche Technique
                                                @break
                                            @case('catalogue')
                                                <i class="fas fa-list me-1"></i>Catalogue
                                                @break
                                            @case('guide')
                                                <i class="fas fa-compass me-1"></i>Guide
                                                @break
                                            @default
                                                <i class="fas fa-file me-1"></i>Autre
                                        @endswitch
                                    </span>
                                </td>
                                <td>{{ Str::limit($document->description, 50) }}</td>
                                <td>
                                    @if($document->is_active)
                                        <span class="badge bg-success">
                                            <i class="fas fa-check-circle me-1"></i>Actif
                                        </span>
                                    @else
                                        <span class="badge bg-secondary">
                                            <i class="fas fa-pause-circle me-1"></i>Inactif
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('admin.documents.show', $document) }}" class="btn btn-outline-primary" title="Voir" data-bs-toggle="tooltip">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.documents.edit', $document) }}" class="btn btn-outline-secondary" title="Modifier" data-bs-toggle="tooltip">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form method="POST" action="{{ route('admin.documents.destroy', $document) }}" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" title="Supprimer" data-bs-toggle="tooltip" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce document ?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $documents->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">Aucun document trouvé</h4>
                <p class="text-muted">Commencez par ajouter votre premier document.</p>
                <a href="{{ route('admin.documents.create') }}" class="btn btn-primary-admin">
                    <i class="fas fa-plus me-2"></i>Ajouter un document
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
