@extends('layouts.app')

@section('hero')
    <header class="hero-section" style="background-image: url('{{ asset('assets/images/hero-background.jpg') }}');">
        <div class="container text-center">
            <div class="hero-text-box">
                <h1 class="display-4 fw-bold">
                    @if(isset($category))
                        {{ $category->name }}
                    @else
                        NOS PRODUITS
                    @endif
                </h1>
                @if(isset($category) && $category->description)
                    <p class="lead mt-3">{{ $category->description }}</p>
                @else
                    <p class="lead mt-3">Découvrez notre gamme complète de plaques ondulées en fibrociment et accessoires</p>
                @endif
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <!-- Filtres par catégorie -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-3">
                                <i class="fas fa-filter text-primary me-2"></i>
                                Filtrer par catégorie
                            </h5>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ route('products.index') }}" 
                                   class="btn {{ !isset($category) ? 'btn-primary' : 'btn-outline-primary' }} btn-sm">
                                    Tous les produits
                                </a>
                                @foreach($categories as $cat)
                                    <a href="{{ route('categories.show', $cat->slug) }}" 
                                       class="btn {{ (isset($category) && $category->id === $cat->id) ? 'btn-primary' : 'btn-outline-primary' }} btn-sm">
                                        {{ $cat->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grille des produits -->
            <div class="row">
                @forelse($products as $product)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card product-card h-100 shadow-sm border-0">
                            @if($product->images->count())
                                <img src="{{ Storage::url($product->images->first()->image_path) }}" 
                                     alt="{{ $product->name }}" 
                                     class="card-img-top">
                            @else
                                <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 280px;">
                                    <i class="fas fa-image text-muted fa-3x"></i>
                                </div>
                            @endif
                            
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    <span class="badge bg-primary-light text-primary-dark">{{ $product->category->name }}</span>
                                </div>
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-muted flex-grow-1">
                                    {{ Str::limit($product->description, 120) }}
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-auto">
                                    <a href="{{ route('products.show', $product->slug) }}"
                                       class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye me-1"></i>
                                        Voir détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5">
                            <i class="fas fa-box-open fa-4x text-muted mb-3"></i>
                            <h4 class="text-muted">Aucun produit trouvé</h4>
                            <p class="text-muted">
                                @if(isset($category))
                                    Aucun produit n'est disponible dans cette catégorie pour le moment.
                                @else
                                    Aucun produit n'est disponible pour le moment.
                                @endif
                            </p>
                            <a href="{{ route('home') }}" class="btn btn-primary">
                                <i class="fas fa-home me-1"></i>
                                Retour à l'accueil
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($products->hasPages())
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
