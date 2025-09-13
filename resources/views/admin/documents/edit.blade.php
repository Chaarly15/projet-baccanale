@extends('layouts.admin')

@section('title', 'Modifier le Document')

@section('content')
<div class="admin-card">
    <div class="card-header-admin">
        <h2 class="card-title-admin">Modifier le Document</h2>
        <a href="{{ route('admin.documents.index') }}" class="btn btn-secondary-admin">
            <i class="fas fa-arrow-left me-2"></i>Retour à la liste
        </a>
    </div>

    <div class="card-body">
        <form action="{{ route('admin.documents.update', $document) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $document->title) }}" required>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="">Sélectionner un type</option>
                            <option value="brochure" {{ old('type', $document->type) == 'brochure' ? 'selected' : '' }}>Brochure</option>
                            <option value="fiche_technique" {{ old('type', $document->type) == 'fiche_technique' ? 'selected' : '' }}>Fiche Technique</option>
                            <option value="catalogue" {{ old('type', $document->type) == 'catalogue' ? 'selected' : '' }}>Catalogue</option>
                            <option value="guide" {{ old('type', $document->type) == 'guide' ? 'selected' : '' }}>Guide</option>
                            <option value="autre" {{ old('type', $document->type) == 'autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sort_order" class="form-label">Ordre de tri</label>
                        <input type="number" name="sort_order" id="sort_order" class="form-control" value="{{ old('sort_order', $document->sort_order) }}" min="0">
                        @error('sort_order')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" {{ old('is_active', $document->is_active) ? 'checked' : '' }}>
                            <label for="is_active" class="form-check-label">Actif</label>
                        </div>
                        @error('is_active')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $document->description) }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="file" class="form-label">Nouveau fichier PDF (optionnel)</label>
                        <input type="file" name="file" id="file" class="form-control" accept=".pdf">
                        <div class="form-text">Taille maximale: 10MB. Laissez vide pour conserver le fichier actuel.</div>
                        <div id="file-info" class="mt-2" style="display: none;">
                            <small class="text-muted">
                                <strong>Nom du fichier:</strong> <span id="file-name"></span><br>
                                <strong>Taille:</strong> <span id="file-size"></span><br>
                                <strong>Type MIME:</strong> <span id="file-type"></span>
                            </small>
                        </div>
                        @if($document->file_name)
                            <div class="mt-2">
                                <small class="text-muted">Fichier actuel: {{ $document->file_name }}</small>
                            </div>
                        @endif
                        @error('file')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('admin.documents.index') }}" class="btn btn-secondary me-2">Annuler</a>
                <button type="submit" class="btn btn-primary-admin">
                    <i class="fas fa-save me-2"></i>Mettre à jour
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.getElementById('file').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const fileInfo = document.getElementById('file-info');
    if (file) {
        const sizeMB = (file.size / (1024 * 1024)).toFixed(2);
        document.getElementById('file-name').textContent = file.name;
        document.getElementById('file-size').textContent = sizeMB + ' MB';
        document.getElementById('file-type').textContent = file.type;
        fileInfo.style.display = 'block';
    } else {
        fileInfo.style.display = 'none';
    }
});
</script>
@endsection
