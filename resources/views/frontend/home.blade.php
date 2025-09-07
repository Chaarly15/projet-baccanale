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
    {{-- Section "Nos Produits" fixes --}}
    <section class="products-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">NOS PRODUITS</h2>

            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <a href="#" class="product-card d-block">
                        <img src="{{ asset('assets/images/produit1.jpg') }}" alt="Produit 1"
                            class="img-fluid rounded shadow-sm">
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="#" class="product-card d-block">
                        <img src="{{ asset('assets/images/produit2.jpg') }}" alt="Produit 2"
                            class="img-fluid rounded shadow-sm">
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="#" class="product-card d-block">
                        <img src="{{ asset('assets/images/produit3.jpg') }}" alt="Produit 3"
                            class="img-fluid rounded shadow-sm">
                    </a>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            @if ($product->images->count())
                                <img src="{{ Storage::url($product->images->first()->image_path) }}"
                                    alt="{{ $product->name }}" class="card-img-top">
                            @else
                                <img src="{{ asset('assets/images/placeholder.jpg') }}" alt="Image indisponible"
                                    class="card-img-top">
                            @endif
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ Str::limit($product->description, 80) }}</p>
                                <a href="{{ route('products.show', $product->slug) }}" class="btn btn-primary btn-sm">Voir
                                    plus</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('products.index') }}" class="btn btn-custom-outline">Voir tous nos produits</a>
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
                            <a href="{{ url('/a-propos') }}" class="btn btn-primary">En savoir plus</a>
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

                            <form action="" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Votre nom</label>
                                        <input type="text" class="form-control form-control-lg" id="name"
                                            name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Votre email</label>
                                        <input type="email" class="form-control form-control-lg" id="email"
                                            name="email" required>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <input type="text" class="form-control form-control-lg" id="subject" name="subject"
                                        required>
                                </div>

                                <div class="mt-3">
                                    <label for="message" class="form-label">Votre message</label>
                                    <textarea class="form-control form-control-lg" id="message" name="message" rows="5" required></textarea>
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
