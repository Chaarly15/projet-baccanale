@extends('layouts.app')

@section('hero')
    <header class="hero-section" style="background-image: url('{{ asset('assets/images/hero-background.jpg') }}');">
        <div class="container text-center">
            <div class="hero-text-box">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb justify-content-center bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}" class="text-white">Produits</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('categories.show', $product->category->slug) }}" class="text-white">{{ $product->category->name }}</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $product->name }}</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold">{{ $product->name }}</h1>
                <p class="lead mt-3">{{ $product->category->name }}</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Images du produit -->
                <div class="col-lg-6 mb-4">
                    @if($product->images->count())
                        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner rounded-3 shadow">
                                @foreach($product->images as $index => $image)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img src="{{ Storage::url($image->image_path) }}" 
                                             alt="{{ $product->name }}" 
                                             class="d-block w-100" 
                                             style="height: 400px; object-fit: cover;">
                                    </div>
                                @endforeach
                            </div>
                            @if($product->images->count() > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Précédent</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Suivant</span>
                                </button>
                            @endif
                        </div>
                        
                        <!-- Miniatures -->
                        @if($product->images->count() > 1)
                            <div class="row mt-3">
                                @foreach($product->images as $index => $image)
                                    <div class="col-3">
                                        <img src="{{ Storage::url($image->image_path) }}" 
                                             alt="{{ $product->name }}" 
                                             class="img-fluid rounded cursor-pointer thumbnail-image {{ $index === 0 ? 'active' : '' }}"
                                             data-bs-target="#productCarousel" 
                                             data-bs-slide-to="{{ $index }}"
                                             style="height: 80px; object-fit: cover;">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @else
                        <div class="bg-light rounded-3 shadow d-flex align-items-center justify-content-center" style="height: 400px;">
                            <i class="fas fa-image text-muted fa-5x"></i>
                        </div>
                    @endif
                </div>

                <!-- Informations du produit -->
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <span class="badge bg-primary-light text-primary-dark fs-6">{{ $product->category->name }}</span>
                            </div>
                            
                            <h1 class="h2 mb-3">{{ $product->name }}</h1>

                            <div class="mb-4">
                                <h5 class="mb-3">Description</h5>
                                <p class="text-muted lh-lg">{{ $product->description }}</p>
                            </div>

                            <div class="d-grid gap-2 d-md-flex">
                                <a href="{{ route('contact.devis') }}" class="btn btn-primary btn-lg flex-fill">
                                    <i class="fas fa-calculator me-2"></i>
                                    Demander un devis
                                </a>
                                <a href="{{ route('contact.index') }}" class="btn btn-outline-primary btn-lg flex-fill">
                                    <i class="fas fa-envelope me-2"></i>
                                    Nous contacter
                                </a>
                            </div>

                            <hr class="my-4">

                            <div class="row text-center">
                                <div class="col-4">
                                    <i class="fas fa-shield-alt text-primary fa-2x mb-2"></i>
                                    <p class="small mb-0">Garantie qualité</p>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-truck text-primary fa-2x mb-2"></i>
                                    <p class="small mb-0">Livraison rapide</p>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-tools text-primary fa-2x mb-2"></i>
                                    <p class="small mb-0">Support technique</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produits similaires -->
    @php
        $similarProducts = App\Models\Product::where('category_id', $product->category_id)
                                           ->where('id', '!=', $product->id)
                                           ->with('images')
                                           ->take(3)
                                           ->get();
    @endphp

    @if($similarProducts->count() > 0)
        <section class="py-5 bg-light">
            <div class="container">
                <h3 class="text-center mb-5">Produits similaires</h3>
                <div class="row">
                    @foreach($similarProducts as $similarProduct)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card product-card h-100 shadow-sm border-0">
                                @if($similarProduct->images->count())
                                    <img src="{{ Storage::url($similarProduct->images->first()->image_path) }}" 
                                         alt="{{ $similarProduct->name }}" 
                                         class="card-img-top">
                                @else
                                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 280px;">
                                        <i class="fas fa-image text-muted fa-3x"></i>
                                    </div>
                                @endif
                                
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $similarProduct->name }}</h5>
                                    <p class="card-text text-muted flex-grow-1">
                                        {{ Str::limit($similarProduct->description, 100) }}
                                    </p>
                                    <div class="d-flex justify-content-end align-items-center mt-auto">
                                        <a href="{{ route('products.show', $similarProduct->slug) }}"
                                           class="btn btn-primary btn-sm">
                                            Voir détails
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection

@push('styles')
<style>
    .thumbnail-image {
        border: 2px solid transparent;
        transition: all 0.3s ease;
    }
    
    .thumbnail-image:hover,
    .thumbnail-image.active {
        border-color: var(--primary-500);
        transform: scale(1.05);
    }
    
    .cursor-pointer {
        cursor: pointer;
    }
</style>
@endpush
