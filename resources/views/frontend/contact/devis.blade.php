@extends('layouts.app')

@section('hero')
    <header class="hero-section" style="background-image: url('{{ asset('assets/images/devis-hero.jpg') }}');">
        <div class="container text-center">
            <div class="hero-text-box">
                <h1 class="display-4 fw-bold">DEMANDE DE DEVIS</h1>
                <p class="lead mt-3">Obtenez un devis personnalisé pour votre projet</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
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
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-body p-5">
                            <div class="text-center mb-5">
                                <i class="fas fa-calculator fa-3x text-primary mb-3"></i>
                                <h2>Demande de devis gratuit</h2>
                                <p class="text-muted">
                                    Remplissez ce formulaire détaillé pour recevoir un devis personnalisé adapté à votre projet.
                                    Notre équipe vous contactera dans les plus brefs délais.
                                </p>
                            </div>

                            <form action="{{ route('contact.store-devis') }}" method="POST">
                                @csrf
                                
                                <!-- Informations personnelles -->
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h5 class="text-primary mb-3">
                                            <i class="fas fa-user me-2"></i>
                                            Informations personnelles
                                        </h5>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nom complet *</label>
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
                                        <label for="email" class="form-label">Email *</label>
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

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Téléphone</label>
                                        <input type="tel" 
                                               class="form-control form-control-lg @error('phone') is-invalid @enderror" 
                                               id="phone" 
                                               name="phone" 
                                               value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="company" class="form-label">Entreprise</label>
                                        <input type="text" 
                                               class="form-control form-control-lg @error('company') is-invalid @enderror" 
                                               id="company" 
                                               name="company" 
                                               value="{{ old('company') }}">
                                        @error('company')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="my-4">

                                <!-- Informations sur le projet -->
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h5 class="text-primary mb-3">
                                            <i class="fas fa-building me-2"></i>
                                            Informations sur le projet
                                        </h5>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label for="project_type" class="form-label">Type de projet *</label>
                                        <select class="form-select form-select-lg @error('project_type') is-invalid @enderror" 
                                                id="project_type" 
                                                name="project_type" 
                                                required>
                                            <option value="">Sélectionnez le type de projet</option>
                                            <option value="construction_neuve" {{ old('project_type') == 'construction_neuve' ? 'selected' : '' }}>Construction neuve</option>
                                            <option value="renovation" {{ old('project_type') == 'renovation' ? 'selected' : '' }}>Rénovation</option>
                                            <option value="extension" {{ old('project_type') == 'extension' ? 'selected' : '' }}>Extension</option>
                                            <option value="reparation" {{ old('project_type') == 'reparation' ? 'selected' : '' }}>Réparation</option>
                                            <option value="autre" {{ old('project_type') == 'autre' ? 'selected' : '' }}>Autre</option>
                                        </select>
                                        @error('project_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="surface" class="form-label">Surface approximative (m²)</label>
                                        <input type="number" 
                                               class="form-control form-control-lg @error('surface') is-invalid @enderror" 
                                               id="surface" 
                                               name="surface" 
                                               value="{{ old('surface') }}" 
                                               min="0" 
                                               step="0.01">
                                        @error('surface')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="description" class="form-label">Description détaillée du projet *</label>
                                    <textarea class="form-control form-control-lg @error('description') is-invalid @enderror" 
                                              id="description" 
                                              name="description" 
                                              rows="6" 
                                              placeholder="Décrivez votre projet en détail : type de bâtiment, utilisation prévue, contraintes particulières, délais souhaités, etc."
                                              required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        Envoyer la demande de devis
                                    </button>
                                </div>

                                <div class="text-center mt-3">
                                    <small class="text-muted">
                                        * Champs obligatoires. Nous nous engageons à vous répondre sous 24h.
                                    </small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Avantages -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h3>Pourquoi choisir Baccanale ?</h3>
                    <p class="text-muted">Des avantages qui font la différence</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <div class="card-body p-4">
                            <i class="fas fa-clock fa-3x text-primary mb-3"></i>
                            <h5>Devis rapide</h5>
                            <p class="text-muted mb-0">Réponse sous 24h maximum</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <div class="card-body p-4">
                            <i class="fas fa-euro-sign fa-3x text-primary mb-3"></i>
                            <h5>Devis gratuit</h5>
                            <p class="text-muted mb-0">Sans engagement de votre part</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <div class="card-body p-4">
                            <i class="fas fa-user-tie fa-3x text-primary mb-3"></i>
                            <h5>Expertise</h5>
                            <p class="text-muted mb-0">Conseils de professionnels</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0 text-center">
                        <div class="card-body p-4">
                            <i class="fas fa-medal fa-3x text-primary mb-3"></i>
                            <h5>Qualité</h5>
                            <p class="text-muted mb-0">Produits certifiés ECOMAT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
