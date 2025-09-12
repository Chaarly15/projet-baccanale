<!-- Vue admin/categories/index -->
{{-- /resources/views/admin/categories/index.blade.php --}}

@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4"> {{-- Utiliser container-fluid et ajouter un padding --}}

    {{-- 1. Ajout des messages flash pour le retour utilisateur --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- 2. Utilisation d'une carte (card) pour une meilleure organisation visuelle --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="mb-0">{{ __('Categories') }}</h2> {{-- 4. Internationalisation --}}
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success d-flex align-items-center">
                <i class="fas fa-plus me-2"></i> {{-- 5. Ajout d'icônes --}}
                <span>{{ __('Add Category') }}</span>
            </a>
        </div>

        <div class="card-body">
            {{-- Formulaire de recherche --}}
            <div class="row mb-4">
                <div class="col-md-6">
                    <form method="GET" action="{{ route('admin.categories.index') }}" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="{{ __('Search by name...') }}" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
                        @if(request('search'))
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary ms-2">{{ __('Clear') }}</a>
                        @endif
                    </form>
                </div>
            </div>

            {{-- 6. Rendre le tableau responsive --}}
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover"> {{-- Amélioration du style du tableau --}}
                    <thead class="table-dark">
                        <tr>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Slug') }}</th>
                            <th>{{ __('Description') }}</th>
                            <th class="text-center" style="width: 150px;">{{ __('Actions') }}</th> {{-- Largeur fixe et centrage --}}
                        </tr>
                    </thead>
                    <tbody>
                        {{-- 3. Utilisation de @forelse pour gérer le cas où il n'y a pas de catégories --}}
                        @forelse($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ Str::limit($category->description, 50) }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning btn-sm" title="{{ __('Edit') }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                {{-- 7. Ajout d'une confirmation avant la suppression --}}
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('{{ __('Are you sure you want to delete this category?') }}');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="{{ __('Delete') }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">{{ __('No categories found.') }}</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- 8. Amélioration de la pagination --}}
            @if ($categories->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $categories->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection