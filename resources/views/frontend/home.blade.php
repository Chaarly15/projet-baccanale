@extends('layouts.app')

{{-- SECTION HÉRO --}}
@section('hero')
    <header class="hero-section" style="background-image: url('{{ asset('assets/images/hero-background.jpg') }}');">
        <div class="container text-center">
            <div class="hero-text-box">
                <h1 class="display-5 fw-bold">PLAQUES ONDULÉES EN FIBROCIMENT</h1>
            </div>
        </div>
    </header>
@endsection

{{-- SECTION CONTENU PRINCIPAL --}}
@section('content')
    {{-- Section "Nos Produits Phares" avec vraies données --}}
    <section class="products-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">NOS PRODUITS PHARES</h2>
                <p class="lead text-muted">Découvrez notre sélection de produits en fibrociment ECOMAT</p>
            </div>

            <div class="row">
                @php
                    $featuredProducts = $products->take(3);
                @endphp

                @foreach ($featuredProducts as $product)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-lg border-0 product-card-hover">
                            @if ($product->images->count())
                                <div class="card-img-wrapper position-relative">
                                    <img src="{{ Storage::url($product->images->first()->image_path) }}"
                                        alt="{{ $product->name }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                                    <div class="position-absolute top-0 end-0 m-2">
                                        <span class="badge bg-primary">{{ $product->category->name }}</span>
                                    </div>
                                </div>
                            @else
                                <div class="card-img-wrapper position-relative">
                                    <div class="d-flex align-items-center justify-content-center bg-light" style="height: 250px;">
                                        <div class="text-center">
                                            <i class="fas fa-image fa-3x text-muted mb-2"></i>
                                            <p class="text-muted mb-0 small">{{ $product->name }}</p>
                                        </div>
                                    </div>
                                    <div class="position-absolute top-0 end-0 m-2">
                                        <span class="badge bg-primary">{{ $product->category->name }}</span>
                                    </div>
                                </div>
                            @endif

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                                <p class="card-text text-muted flex-grow-1">
                                    {{ Str::limit($product->description, 100) }}
                                </p>
                                <div class="mt-auto">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="h5 text-primary mb-0 fw-bold">
                                            {{ number_format($product->price, 0, ',', ' ') }} FCFA
                                        </span>
                                        <small class="text-muted">l'unité</small>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('products.show', $product->slug) }}"
                                           class="btn btn-primary">
                                            <i class="fas fa-eye me-2"></i>Voir détails
                                        </a>
                                        <a href="{{ route('contact.devis') }}"
                                           class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-calculator me-2"></i>Demander un devis
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-th-large me-2"></i>
                    Voir tous nos produits
                </a>
            </div>
        </div>

    </section>

    {{-- Section "Produits dynamiques" --}}


    {{-- Section "Présentation de Baccanale" --}}
    <section class="presentation-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">PRÉSENTATION DE BACCANALE</h2>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-sm border-0 p-4 d-flex flex-md-row align-items-center">
                        <div class="logo-area text-center me-md-4 mb-3 mb-md-0">
                            <img src="{{ asset('assets/logo/logo.jpg') }}" alt="Logo Baccanale SARL"
                                class="img-fluid rounded" style="max-width: 200px;">
                        </div>
                        <div class="text-area">
                            <h4 class="fw-bold">Qui sommes-nous ?</h4>
                            <p>
                                Baccanale est une entreprise ivoirienne, distributeur officiel de plaques
                                ondulées en fibrociment ECOMAT et accessoires. Depuis sa création, nous
                                fournissons des solutions fiables pour la construction et la quincaillerie de
                                fixation...
                            </p>
                            <a href="{{ route('pages.show', 'qui-sommes-nous') }}" class="btn btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section "Contactez-nous" --}}
    <section class="contact-form-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-4">Contactez-nous</h2>
                            <p class="text-center mb-4">
                                Vous avez une question ou un projet ? Remplissez le formulaire ci-dessous et notre équipe
                                vous
                                répondra rapidement.
                            </p>

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fas fa-check-circle me-2"></i>
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Votre nom</label>
                                        <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name"
                                            name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Votre email</label>
                                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email"
                                            name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <input type="text" class="form-control form-control-lg @error('subject') is-invalid @enderror" id="subject" name="subject"
                                        value="{{ old('subject') }}" required>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label for="message" class="form-label">Votre message</label>
                                    <textarea class="form-control form-control-lg @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section "Où nous trouver ?" --}}
    <section class="map-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Où nous trouver ?</h2>
            <div class="map-container shadow-sm rounded">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.585579624424!2d-4.002829824683515!3d5.309027835821812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb5f889218d3%3A0x673c3325055bc515!2sRue%20Flesse%20%26%20Marie%20Curie%2C%20Abidjan%2C%20C%C3%B4te%20d'Ivoire!5e0!3m2!1sfr!2sci!4v1725672166683!5m2!1sfr!2sci"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection
