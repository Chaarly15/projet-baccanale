@extends('layouts.app')

@section('hero')
    <header class="hero-section" style="background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);">
        <div class="container text-center">
            <div class="hero-text-box">
                <h1 class="display-4 fw-bold text-white">{{ $document->title }}</h1>
                <p class="lead mt-3 text-white opacity-90">
                    {{ $document->type_display }} - {{ $document->formatted_file_size }}
                </p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <style>
        .document-detail-card {
            position: relative;
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(59, 130, 246, 0.15);
        }

        .document-detail-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #3b82f6, #1d4ed8, #2563eb, #3b82f6);
            background-size: 400% 400%;
            animation: gradientBorder 4s ease-in-out infinite;
            z-index: 1;
            border-radius: 20px;
        }

        .document-detail-card::after {
            content: '';
            position: absolute;
            top: 4px;
            left: 4px;
            right: 4px;
            bottom: 4px;
            background: #ffffff;
            border-radius: 16px;
            z-index: 2;
        }

        @keyframes gradientBorder {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .document-detail-content {
            position: relative;
            z-index: 3;
            padding: 3rem;
        }

        .document-icon-large {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            box-shadow: 0 15px 35px rgba(59, 130, 246, 0.3);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .download-btn-large {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border: none;
            color: white;
            padding: 1rem 3rem;
            border-radius: 15px;
            font-weight: 700;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
        }

        .download-btn-large::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .download-btn-large:hover::before {
            left: 100%;
        }

        .download-btn-large:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.4);
        }

        .info-card {
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            border-radius: 15px;
            padding: 1.5rem;
            border: 2px solid rgba(59, 130, 246, 0.1);
            transition: all 0.3s ease;
        }

        .info-card:hover {
            border-color: rgba(59, 130, 246, 0.3);
            transform: translateY(-2px);
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
                        <li class="breadcrumb-item active">{{ $document->title }}</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="document-detail-card">
                        <div class="document-detail-content text-center">
                            <div class="document-icon-large">
                                @switch($document->type)
                                    @case('brochure')
                                        <i class="fas fa-book fa-4x text-white"></i>
                                        @break
                                    @case('fiche_technique')
                                        <i class="fas fa-file-alt fa-4x text-white"></i>
                                        @break
                                    @case('catalogue')
                                        <i class="fas fa-th-large fa-4x text-white"></i>
                                        @break
                                    @case('guide')
                                        <i class="fas fa-map fa-4x text-white"></i>
                                        @break
                                    @default
                                        <i class="fas fa-file-pdf fa-4x text-white"></i>
                                @endswitch
                            </div>

                            <h2 class="fw-bold text-dark mb-4">{{ $document->title }}</h2>
                            
                            @if($document->description)
                                <p class="lead text-muted mb-5">{{ $document->description }}</p>
                            @endif

                            <div class="row mb-5">
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="info-card">
                                        <div class="fw-bold text-primary h4">{{ $document->type_display }}</div>
                                        <small class="text-muted">Type</small>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="info-card">
                                        <div class="fw-bold text-success h4">{{ $document->formatted_file_size }}</div>
                                        <small class="text-muted">Taille</small>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="info-card">
                                        <div class="fw-bold text-info h4">{{ $document->download_count }}</div>
                                        <small class="text-muted">Téléchargements</small>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <div class="info-card">
                                        <div class="fw-bold text-warning h4">PDF</div>
                                        <small class="text-muted">Format</small>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-3 justify-content-center flex-wrap">
                                <a href="{{ route('documentation.download', $document->slug) }}" 
                                   class="btn download-btn-large">
                                    <i class="fas fa-download me-2"></i>Télécharger maintenant
                                </a>
                                <a href="{{ route('documentation.index') }}" 
                                   class="btn btn-outline-primary btn-lg">
                                    <i class="fas fa-arrow-left me-2"></i>Retour à la documentation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section documents similaires -->
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="text-center fw-bold text-dark mb-4">Autres documents</h3>
            <div class="row">
                @php
                    $relatedDocuments = \App\Models\Document::active()
                        ->where('id', '!=', $document->id)
                        ->where('type', $document->type)
                        ->limit(3)
                        ->get();
                @endphp
                
                @forelse($relatedDocuments as $related)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center">
                                <div class="text-primary mb-3">
                                    @switch($related->type)
                                        @case('brochure')
                                            <i class="fas fa-book fa-2x"></i>
                                            @break
                                        @case('fiche_technique')
                                            <i class="fas fa-file-alt fa-2x"></i>
                                            @break
                                        @case('catalogue')
                                            <i class="fas fa-th-large fa-2x"></i>
                                            @break
                                        @case('guide')
                                            <i class="fas fa-map fa-2x"></i>
                                            @break
                                        @default
                                            <i class="fas fa-file-pdf fa-2x"></i>
                                    @endswitch
                                </div>
                                <h5 class="fw-bold">{{ $related->title }}</h5>
                                <p class="text-muted small">{{ Str::limit($related->description, 80) }}</p>
                                <a href="{{ route('documentation.show', $related->slug) }}" 
                                   class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i>Voir
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Aucun autre document de ce type disponible.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
