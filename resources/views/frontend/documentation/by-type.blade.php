@extends('layouts.app')

@section('hero')
    <header class="hero-section" style="background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);">
        <div class="container text-center">
            <div class="hero-text-box">
                <h1 class="display-4 fw-bold text-white">{{ $title }}</h1>
                <p class="lead mt-3 text-white opacity-90">
                    Découvrez notre collection de {{ strtolower($title) }}
                </p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <style>
        .document-card {
            position: relative;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.1);
        }

        .document-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #3b82f6, #1d4ed8, #2563eb, #3b82f6);
            background-size: 400% 400%;
            animation: gradientBorder 3s ease-in-out infinite;
            z-index: 1;
            border-radius: 16px;
        }

        .document-card::after {
            content: '';
            position: absolute;
            top: 3px;
            left: 3px;
            right: 3px;
            bottom: 3px;
            background: #ffffff;
            border-radius: 13px;
            z-index: 2;
        }

        @keyframes gradientBorder {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .document-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.25);
        }

        .document-content {
            position: relative;
            z-index: 3;
            padding: 2rem;
        }

        .breadcrumb-custom {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(29, 78, 216, 0.1));
            border-radius: 12px;
            padding: 1rem 1.5rem;
            margin-bottom: 2rem;
        }

        .breadcrumb-custom .breadcrumb {
            margin: 0;
            background: transparent;
        }

        .breadcrumb-custom .breadcrumb-item a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 600;
        }

        .breadcrumb-custom .breadcrumb-item.active {
            color: #1d4ed8;
            font-weight: 700;
        }
    </style>

    <section class="py-5">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="breadcrumb-custom">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">
                                <i class="fas fa-home me-1"></i>Accueil
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('documentation.index') }}">Documentation</a>
                        </li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </nav>
            </div>

            @if($documents->isEmpty())
                <div class="text-center py-5">
                    <div class="text-primary mb-4">
                        @switch($type)
                            @case('brochure')
                                <i class="fas fa-book fa-5x"></i>
                                @break
                            @case('fiche_technique')
                                <i class="fas fa-file-alt fa-5x"></i>
                                @break
                            @case('catalogue')
                                <i class="fas fa-th-large fa-5x"></i>
                                @break
                            @case('guide')
                                <i class="fas fa-map fa-5x"></i>
                                @break
                            @default
                                <i class="fas fa-folder-open fa-5x"></i>
                        @endswitch
                    </div>
                    <h3 class="text-muted mb-3">Aucun document disponible</h3>
                    <p class="text-muted">Les {{ strtolower($title) }} seront bientôt disponibles.</p>
                    <a href="{{ route('documentation.index') }}" class="btn btn-primary">
                        <i class="fas fa-arrow-left me-2"></i>Retour à la documentation
                    </a>
                </div>
            @else
                <div class="row">
                    @foreach($documents as $document)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="document-card h-100">
                                <div class="document-content">
                                    <div class="text-center">
                                        <div class="text-primary mb-3">
                                            @switch($document->type)
                                                @case('brochure')
                                                    <i class="fas fa-book fa-3x"></i>
                                                    @break
                                                @case('fiche_technique')
                                                    <i class="fas fa-file-alt fa-3x"></i>
                                                    @break
                                                @case('catalogue')
                                                    <i class="fas fa-th-large fa-3x"></i>
                                                    @break
                                                @case('guide')
                                                    <i class="fas fa-map fa-3x"></i>
                                                    @break
                                                @default
                                                    <i class="fas fa-file-pdf fa-3x"></i>
                                            @endswitch
                                        </div>

                                        <h4 class="fw-bold text-dark mb-3">{{ $document->title }}</h4>
                                        
                                        @if($document->description)
                                            <p class="text-muted mb-4">{{ Str::limit($document->description, 120) }}</p>
                                        @endif

                                        <div class="row mb-4">
                                            <div class="col-6">
                                                <div class="bg-light rounded p-2">
                                                    <div class="fw-bold text-primary">{{ $document->formatted_file_size }}</div>
                                                    <small class="text-muted">Taille</small>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bg-light rounded p-2">
                                                    <div class="fw-bold text-success">{{ $document->download_count }}</div>
                                                    <small class="text-muted">Téléchargements</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{ route('documentation.download', $document->slug) }}" 
                                               class="btn btn-primary">
                                                <i class="fas fa-download me-2"></i>Télécharger
                                            </a>
                                            <a href="{{ route('documentation.show', $document->slug) }}" 
                                               class="btn btn-outline-primary">
                                                <i class="fas fa-eye me-2"></i>Voir
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Navigation vers autres types -->
                <div class="mt-5">
                    <h4 class="text-center fw-bold text-dark mb-4">Autres types de documents</h4>
                    <div class="row">
                        @php
                            $allTypes = [
                                'brochure' => ['title' => 'Brochures', 'icon' => 'fas fa-book'],
                                'fiche_technique' => ['title' => 'Fiches techniques', 'icon' => 'fas fa-file-alt'],
                                'catalogue' => ['title' => 'Catalogues', 'icon' => 'fas fa-th-large'],
                                'guide' => ['title' => 'Guides', 'icon' => 'fas fa-map'],
                            ];
                        @endphp

                        @foreach($allTypes as $typeKey => $typeInfo)
                            @if($typeKey !== $type)
                                <div class="col-md-3 col-6 mb-3">
                                    <a href="{{ route('documentation.by-type', $typeKey) }}" 
                                       class="btn btn-outline-primary w-100 h-100 d-flex flex-column align-items-center justify-content-center p-3">
                                        <i class="{{ $typeInfo['icon'] }} fa-2x mb-2"></i>
                                        <span class="fw-bold">{{ $typeInfo['title'] }}</span>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Section d'aide -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3 class="fw-bold text-dark mb-2">Besoin d'aide ?</h3>
                    <p class="text-muted mb-0">
                        Notre équipe technique est à votre disposition pour vous accompagner dans vos projets.
                    </p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-phone me-2"></i>Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
