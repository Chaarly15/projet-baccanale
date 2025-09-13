@extends('layouts.admin')

@section('title', 'Détails du Produit')

@push('styles')
<style>
.product-header {
    background: linear-gradient(135deg, var(--baccanale-blue) 0%, var(--baccanale-dark-blue) 100%);
    color: white;
    border-radius: 12px 12px 0 0;
}

.product-price {
    font-size: 2rem;
    font-weight: 700;
    color: var(--baccanale-blue);
}

.product-badge {
    background: var(--baccanale-light-blue);
    color: var(--baccanale-dark-blue);
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
}

.image-gallery {
    position: relative;
}

.main-image {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.thumbnail-container {
    display: flex;
    gap: 0.5rem;
    margin-top: 1rem;
    overflow-x: auto;
    padding-bottom: 0.5rem;
}

.thumbnail {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 6px;
    cursor: pointer;
    border: 3px solid transparent;
    transition: all 0.3s ease;
}

.thumbnail.active {
    border-color: var(--baccanale-blue);
    transform: scale(1.05);
}

.info-card {
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease;
}

.info-card:hover {
    transform: translateY(-2px);
}

.info-icon {
    width: 40px;
    height: 40px;
    background: var(--baccanale-light-blue);
    color: var(--baccanale-dark-blue);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
}

@media (max-width: 768px) {
    .product-price {
        font-size: 1.5rem;
    }

    .main-image {
        height: 250px;
    }

    .thumbnail {
        width: 60px;
        height: 60px;
    }
}
</style>
@endpush

@section('content')
<div class="container-fluid">
    <!-- Product Header -->
    <div class="admin-card product-header mb-4">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="mb-2">{{ $product->name }}</h1>
                    <p class="mb-0 opacity-75">{{ $product->slug }}</p>
                </div>
                <div class="col-md-4 text-end">
                    <div class="d-flex gap-2 justify-content-end">
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-light">
                            <i class="fas fa-edit me-2"></i>Modifier
                        </a>
                        <form method="POST" action="{{ route('admin.products.destroy', $product) }}" class="d-inline"
                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash me-2"></i>Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Image Gallery -->
        <div class="col-lg-6 mb-4">
            <div class="admin-card h-100">
                <div class="card-header-admin">
                    <h5 class="card-title-admin mb-0">
                        <i class="fas fa-images me-2"></i>Images du produit
                    </h5>
                </div>
                <div class="card-body">
                    @if($product->images->count() > 0)
                        <div class="image-gallery">
                            <img id="mainImage" src="{{ asset('storage/' . $product->images->first()->image_path) }}"
                                 alt="Image principale du produit" class="main-image">

                            <div class="thumbnail-container">
                                @foreach($product->images as $index => $image)
                                    <img src="{{ asset('storage/' . $image->image_path) }}"
                                         alt="Miniature {{ $index + 1 }}"
                                         class="thumbnail {{ $index === 0 ? 'active' : '' }}"
                                         onclick="changeMainImage('{{ asset('storage/' . $image->image_path) }}', this)">
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-image fa-3x text-muted mb-3"></i>
                            <p class="text-muted">Aucune image disponible</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Product Information -->
        <div class="col-lg-6">
            <div class="row">
                <!-- Basic Information -->
                <div class="col-12 mb-4">
                    <div class="admin-card info-card">
                        <div class="card-header-admin">
                            <h5 class="card-title-admin mb-0">
                                <i class="fas fa-info-circle me-2"></i>Informations générales
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="info-icon">
                                            <i class="fas fa-tag"></i>
                                        </div>
                                        <div>
                                            <small class="text-muted d-block">Catégorie</small>
                                            <span class="fw-semibold">{{ $product->category->name ?? 'Non catégorisé' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="info-icon">
                                            <i class="fas fa-link"></i>
                                        </div>
                                        <div>
                                            <small class="text-muted d-block">Slug</small>
                                            <span class="fw-semibold">{{ $product->slug }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-12 mb-4">
                    <div class="admin-card info-card">
                        <div class="card-header-admin">
                            <h5 class="card-title-admin mb-0">
                                <i class="fas fa-align-left me-2"></i>Description
                            </h5>
                        </div>
                        <div class="card-body">
                            @if($product->description)
                                <p class="mb-0">{{ $product->description }}</p>
                            @else
                                <p class="text-muted mb-0">Aucune description disponible</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Statistics -->
                <div class="col-12">
                    <div class="admin-card info-card">
                        <div class="card-header-admin">
                            <h5 class="card-title-admin mb-0">
                                <i class="fas fa-chart-bar me-2"></i>Statistiques
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-6">
                                    <div class="product-badge d-inline-block mb-2">
                                        <i class="fas fa-images me-1"></i>{{ $product->images->count() }}
                                    </div>
                                    <small class="text-muted d-block">Images</small>
                                </div>
                                <div class="col-6">
                                    <div class="product-badge d-inline-block mb-2">
                                        <i class="fas fa-calendar me-1"></i>{{ $product->created_at->format('d/m/Y') }}
                                    </div>
                                    <small class="text-muted d-block">Créé le</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back Button -->
    <div class="mt-4">
        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Retour à la liste des produits
        </a>
    </div>
</div>

@push('scripts')
<script>
function changeMainImage(src, thumbnail) {
    document.getElementById('mainImage').src = src;

    // Remove active class from all thumbnails
    document.querySelectorAll('.thumbnail').forEach(thumb => {
        thumb.classList.remove('active');
    });

    // Add active class to clicked thumbnail
    thumbnail.classList.add('active');
}
</script>
@endpush
@endsection
