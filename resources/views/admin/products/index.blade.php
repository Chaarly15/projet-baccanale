@extends('layouts.admin')

@section('title', 'Produits')

@section('content')
<div class="admin-card">
    <div class="card-header-admin d-flex justify-content-between align-items-center">
        <h2 class="card-title-admin mb-0">
            <i class="fas fa-box me-2 text-primary"></i> Gestion des Produits
        </h2>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary-admin">
            <i class="fas fa-plus me-2"></i> Ajouter un produit
        </a>
    </div>

    <div class="card-body">

        {{-- Barre de recherche et filtre --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <form method="GET" action="{{ route('admin.products.index') }}" class="d-flex gap-2">
                <input type="text" name="search" class="form-control form-control-sm" 
                       placeholder="Rechercher un produit..." value="{{ request('search') }}">
                <select name="category" class="form-select form-select-sm">
                    <option value="">Toutes les catégories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        @if($products->count() > 0)
            <div class="table-responsive">
                <table class="table table-admin align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Description</th>
                            <th>Images</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="fw-semibold">{{ $product->name }}</td>
                                <td>
                                    <span class="badge bg-info text-dark">
                                        {{ $product->category->name ?? 'N/A' }}
                                    </span>
                                </td>
                                <td>{{ Str::limit($product->description, 50) }}</td>
                                <td>
                                    <span class="badge bg-secondary">
                                        {{ $product->images->count() }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            <i class="fas fa-cogs"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.products.show', $product) }}">
                                                    <i class="fas fa-eye me-2 text-primary"></i> Voir
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('admin.products.edit', $product) }}">
                                                    <i class="fas fa-edit me-2 text-warning"></i> Modifier
                                                </a>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('admin.products.destroy', $product) }}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="fas fa-trash me-2"></i> Supprimer
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">Aucun produit trouvé</h4>
                <p class="text-muted">Commencez par ajouter votre premier produit.</p>
                <a href="{{ route('admin.products.create') }}" class="btn btn-primary-admin">
                    <i class="fas fa-plus me-2"></i> Ajouter un produit
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
