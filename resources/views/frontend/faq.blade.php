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
                    @if($faqs->count() > 0)
                        <div class="accordion" id="faqAccordion">
                            @foreach($faqs as $index => $faq)
                                <div class="accordion-item border-0 shadow-sm mb-3 rounded-3">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button collapsed rounded-3 fw-semibold"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $index }}"
                                                aria-expanded="false"
                                                aria-controls="collapse{{ $index }}">
                                            <i class="fas fa-question-circle text-primary me-3"></i>
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}"
                                         class="accordion-collapse collapse"
                                         aria-labelledby="heading{{ $index }}"
                                         data-bs-parent="#faqAccordion">
                                        <div class="accordion-body pt-0">
                                            <div class="border-start border-primary border-3 ps-4 ms-2">
                                                <i class="fas fa-lightbulb text-warning me-2"></i>
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
    </section>

    <!-- Section Contact -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h3 class="mb-4">Vous ne trouvez pas votre réponse ?</h3>
                    <p class="text-muted mb-4">
                        Notre équipe est là pour vous aider. N'hésitez pas à nous contacter pour toute question spécifique.
                    </p>
                    <div class="d-flex flex-column flex-md-row gap-3 justify-content-center">
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
