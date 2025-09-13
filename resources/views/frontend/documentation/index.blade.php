@extends('layouts.app')

@section('hero')
    <header class="hero-section" style="background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);">
        <div class="container text-center">
            <div class="hero-text-box">
                <h1 class="display-4 fw-bold text-white">
                    <i class="fas fa-file-alt me-3"></i>DOCUMENTATION
                </h1>
                <p class="lead mt-3 text-white opacity-90">
                    Téléchargez nos brochures, fiches techniques et guides pour tous vos projets
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

        .document-card:hover::before {
            animation-duration: 1.5s;
        }

        .document-content {
            position: relative;
            z-index: 3;
            padding: 2rem;
        }

        .document-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
        }

        .document-card:hover .document-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 35px rgba(59, 130, 246, 0.4);
        }

        .document-type-badge {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .download-btn {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border: none;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .download-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .download-btn:hover::before {
            left: 100%;
        }

        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        }

        .section-title {
            position: relative;
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #1d4ed8);
            border-radius: 2px;
        }

        .stats-counter {
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            border-radius: 12px;
            padding: 1rem;
            text-align: center;
            border: 2px solid rgba(59, 130, 246, 0.1);
        }
    </style>

    <section class="py-5">
        <div class="container">
            <p>Debug: {{ $documents->count() }} documents grouped</p>
            @if($documents->isEmpty())
                <div class="text-center py-5">
                    <div class="document-icon mx-auto mb-4">
                        <i class="fas fa-folder-open fa-2x text-white"></i>
                    </div>
                    <h3 class="text-muted mb-3">Aucun document disponible</h3>
                    <p class="text-muted">Les documents seront bientôt disponibles au téléchargement.</p>
                </div>
            @else
                @foreach($documents as $type => $typeDocuments)
                    <div class="mb-5">
                        <h2 class="section-title fw-bold text-dark">
                            {{ $typeDocuments->first()->type_display }}s
                        </h2>
                        
                        <div class="row">
                            @foreach($typeDocuments as $document)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="document-card h-100">
                                        <div class="document-content">
                                            <div class="text-center">
                                                <div class="document-type-badge">
                                                    {{ $document->type_display }}
                                                </div>
                                                
                                                <div class="document-icon">
                                                    @switch($document->type)
                                                        @case('brochure')
                                                            <i class="fas fa-book fa-2x text-white"></i>
                                                            @break
                                                        @case('fiche_technique')
                                                            <i class="fas fa-file-alt fa-2x text-white"></i>
                                                            @break
                                                        @case('catalogue')
                                                            <i class="fas fa-th-large fa-2x text-white"></i>
                                                            @break
                                                        @case('guide')
                                                            <i class="fas fa-map fa-2x text-white"></i>
                                                            @break
                                                        @default
                                                            <i class="fas fa-file-pdf fa-2x text-white"></i>
                                                    @endswitch
                                                </div>

                                                <h4 class="fw-bold text-dark mb-3">{{ $document->title }}</h4>
                                                
                                                @if($document->description)
                                                    <p class="text-muted mb-4">{{ Str::limit($document->description, 120) }}</p>
                                                @endif

                                                <div class="row mb-4">
                                                    <div class="col-6">
                                                        <div class="stats-counter">
                                                            <div class="fw-bold text-primary">{{ $document->formatted_file_size }}</div>
                                                            <small class="text-muted">Taille</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="stats-counter">
                                                            <div class="fw-bold text-success">{{ $document->download_count }}</div>
                                                            <small class="text-muted">Téléchargements</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex gap-2 justify-content-center">
                                                    <a href="{{ route('documentation.download', $document->slug) }}" 
                                                       class="btn download-btn">
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
                    </div>
                @endforeach
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
