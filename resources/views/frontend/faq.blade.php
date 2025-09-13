@extends('layouts.app')

@section('hero')
    <header class="hero-section" style="background-image: url('{{ asset('assets/images/hero-background.jpg') }}');">
        <div class="container text-center">
            <div class="hero-text-box">
                <h1 class="display-4 fw-bold">FOIRE AUX QUESTIONS</h1>
                <p class="lead mt-3">Trouvez rapidement les réponses à vos questions</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-body p-5">
                            <div class="text-center mb-5">
                                <i class="fas fa-question-circle fa-3x text-primary mb-3"></i>
                                <h2>Questions Fréquemment Posées</h2>
                                <p class="text-muted">
                                    Trouvez rapidement les réponses à vos questions les plus courantes.
                                </p>
                            </div>

                            @if($faqs->count() > 0)
                                <div class="accordion" id="faqAccordion">
                                    @foreach($faqs as $index => $faq)
                                        <div class="accordion-item faq-accordion-item">
                                            <h2 class="accordion-header" id="heading{{ $index }}">
                                                <button class="accordion-button collapsed faq-accordion-button"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{ $index }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse{{ $index }}">
                                                    <i class="fas fa-question-circle faq-question-icon"></i>
                                                    {{ $faq->question }}
                                                </button>
                                            </h2>
                                            <div id="collapse{{ $index }}"
                                                 class="accordion-collapse collapse"
                                                 aria-labelledby="heading{{ $index }}"
                                                 data-bs-parent="#faqAccordion">
                                                <div class="accordion-body pt-0">
                                                    <div class="faq-answer">
                                                        <i class="fas fa-lightbulb faq-answer-icon"></i>
                                                        {!! nl2br(e($faq->answer)) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-5">
                                    <i class="fas fa-question-circle fa-4x text-muted mb-3"></i>
                                    <h4 class="text-muted">Aucune question disponible</h4>
                                    <p class="text-muted">Les questions fréquemment posées seront bientôt disponibles.</p>
                                    <a href="{{ route('contact.index') }}" class="btn btn-primary">
                                        <i class="fas fa-envelope me-1"></i>
                                        Nous contacter
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section class="faq-contact-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h3 class="faq-contact-title">Vous ne trouvez pas votre réponse ?</h3>
                    <p class="faq-contact-text">
                        Notre équipe est là pour vous aider. N'hésitez pas à nous contacter pour toute question spécifique.
                    </p>
                    <div class="d-flex flex-column flex-md-row gap-3 justify-content-center faq-contact-buttons">
                        <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-envelope me-2"></i>
                            Nous contacter
                        </a>
                        <a href="{{ route('contact.devis') }}" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-calculator me-2"></i>
                            Demander un devis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
