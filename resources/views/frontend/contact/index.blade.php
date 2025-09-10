@extends('layouts.app')

@section('hero')
    <header class="hero-section" style="background-image: url('{{ asset('assets/images/hero-background.jpg') }}');">
        <div class="container text-center">
            <div class="hero-text-box">
                <h1 class="display-4 fw-bold">CONTACTEZ-NOUS</h1>
                <p class="lead mt-3">Nous sommes là pour répondre à toutes vos questions</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <!-- Section Formulaire de contact -->
    <section class="py-5">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-body p-5">
                            <div class="text-center mb-5">
                                <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                                <h2>Envoyez-nous un message</h2>
                                <p class="text-muted">
                                    Vous avez une question ou un projet ? Remplissez le formulaire ci-dessous et notre équipe
                                    vous répondra rapidement.
                                </p>
                            </div>

                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Votre nom *</label>
                                        <input type="text" 
                                               class="form-control form-control-lg @error('name') is-invalid @enderror" 
                                               id="name" 
                                               name="name" 
                                               value="{{ old('name') }}" 
                                               required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Votre email *</label>
                                        <input type="email" 
                                               class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                               id="email" 
                                               name="email" 
                                               value="{{ old('email') }}" 
                                               required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="subject" class="form-label">Sujet *</label>
                                    <input type="text" 
                                           class="form-control form-control-lg @error('subject') is-invalid @enderror" 
                                           id="subject" 
                                           name="subject" 
                                           value="{{ old('subject') }}" 
                                           required>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label for="message" class="form-label">Votre message *</label>
                                    <textarea class="form-control form-control-lg @error('message') is-invalid @enderror" 
                                              id="message" 
                                              name="message" 
                                              rows="6" 
                                              required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        Envoyer le message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Informations de contact -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h3>Nos coordonnées</h3>
                    <p class="text-muted">Plusieurs moyens de nous joindre</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <div class="card-body p-4">
                            <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                            <h5>Adresse</h5>
                            <p class="text-muted mb-0">
                                Rue Flesse et Marie Curie<br>
                                Zone 4, Abidjan<br>
                                Côte d'Ivoire
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <div class="card-body p-4">
                            <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                            <h5>Téléphone</h5>
                            <p class="text-muted mb-0">
                                <a href="tel:+22501037353394" class="text-decoration-none">
                                    +225 01 03 735 394
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <div class="card-body p-4">
                            <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                            <h5>Email</h5>
                            <p class="text-muted mb-0">
                                <a href="mailto:contact@baccanale-ci.com" class="text-decoration-none">
                                    contact@baccanale-ci.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h4 class="mb-3">Horaires d'ouverture</h4>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card shadow-sm border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 text-end">
                                            <strong>Lundi - Vendredi:</strong>
                                        </div>
                                        <div class="col-6 text-start">
                                            8h00 - 17h00
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6 text-end">
                                            <strong>Samedi:</strong>
                                        </div>
                                        <div class="col-6 text-start">
                                            8h00 - 12h00
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6 text-end">
                                            <strong>Dimanche:</strong>
                                        </div>
                                        <div class="col-6 text-start text-muted">
                                            Fermé
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Carte -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center mb-5">Où nous trouver ?</h3>
                    <div class="map-container shadow-sm rounded">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.585579624424!2d-4.002829824683515!3d5.309027835821812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb5f889218d3%3A0x673c3325055bc515!2sRue%20Flesse%20%26%20Marie%20Curie%2C%20Abidjan%2C%20C%C3%B4te%20d'Ivoire!5e0!3m2!1sfr!2sci!4v1725672166683!5m2!1sfr!2sci"
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
