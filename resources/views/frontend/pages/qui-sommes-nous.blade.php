@extends('layouts.app')

@section('title', 'Qui sommes-nous ? - BACCANALE')
@section('meta_description', 'Découvrez BACCANALE, spécialiste en fibrociment ECOMAT en Côte d\'Ivoire. Notre histoire, nos valeurs et notre engagement qualité.')

@section('content')
<!-- Hero Section Moderne -->
<section class="hero-modern">
    <div class="hero-gradient"></div>
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <div class="hero-content-modern">
                    <span class="badge-modern">À PROPOS DE NOUS</span>
                    <h1 class="hero-title-modern">
                        Qui sommes-nous ?
                    </h1>
                    <p class="hero-description">
                        Découvrez BACCANALE, votre partenaire de confiance en fibrociment ECOMAT en Côte d'Ivoire.
                        Une expertise reconnue au service de vos projets de construction.
                    </p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Années d'expérience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Projets réalisés</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Satisfaction client</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image-modern">
                    <div class="image-container">
                        <img src="{{ asset('assets/images/497_2.jpg') }}" alt="BACCANALE - Fibrociment ECOMAT" class="img-fluid rounded-modern">
                        <div class="floating-card">
                            <i class="fas fa-building text-primary"></i>
                            <div>
                                <strong>BACCANALE</strong>
                                <small>Spécialiste Fibrociment</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Notre Histoire -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="text-center mb-5">
                    <span class="section-badge">NOTRE HISTOIRE</span>
                    <h2 class="section-title-modern">Une entreprise engagée pour votre réussite</h2>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4">
                        <div class="story-content">
                            <h3 class="text-primary mb-3">Notre entreprise</h3>
                            <p class="lead text-muted">
                                BACCANALE est une entreprise spécialisée dans la distribution de produits en fibrociment ECOMAT en Côte d'Ivoire.
                            </p>
                            <p>
                                Depuis notre création, nous nous engageons à fournir des solutions de qualité supérieure pour tous vos projets de construction. Notre expertise dans le domaine du fibrociment nous permet d'offrir des produits durables et fiables qui répondent aux exigences les plus strictes du marché ivoirien.
                            </p>
                            <p>
                                Nous travaillons en étroite collaboration avec nos clients pour comprendre leurs besoins spécifiques et leur proposer les meilleures solutions adaptées à leurs projets.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="story-features">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Constructions résidentielles</h5>
                                    <p>Solutions adaptées pour vos projets de logement</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Projets commerciaux</h5>
                                    <p>Expertise pour vos bâtiments d'entreprise</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-industry"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Constructions industrielles</h5>
                                    <p>Solutions robustes pour l'industrie</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Nos Valeurs -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">NOS VALEURS</span>
            <h2 class="section-title-modern">Ce qui nous guide au quotidien</h2>
            <p class="section-description">Des principes forts qui définissent notre approche et notre engagement envers nos clients</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="value-card-modern">
                    <div class="value-icon-modern">
                        <i class="fas fa-award"></i>
                    </div>
                    <h5>Qualité</h5>
                    <p>Nous sélectionnons uniquement les meilleurs produits en fibrociment pour garantir la satisfaction de nos clients.</p>
                    <div class="card-decoration"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="value-card-modern">
                    <div class="value-icon-modern">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h5>Service</h5>
                    <p>Un accompagnement personnalisé pour chaque client, de la conception à la réalisation de votre projet.</p>
                    <div class="card-decoration"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="value-card-modern">
                    <div class="value-icon-modern">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5>Innovation</h5>
                    <p>Des solutions modernes et efficaces qui s'adaptent aux évolutions du secteur de la construction.</p>
                    <div class="card-decoration"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="value-card-modern">
                    <div class="value-icon-modern">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Fiabilité</h5>
                    <p>Des partenariats durables basés sur la confiance et le respect de nos engagements.</p>
                    <div class="card-decoration"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Notre Engagement -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="engagement-content">
                    <span class="section-badge-white">NOTRE ENGAGEMENT</span>
                    <h2 class="text-white mb-4">Nos promesses envers vous</h2>
                    <p class="lead mb-4">Chez BACCANALE, chaque engagement est une promesse tenue. Découvrez ce qui fait de nous votre partenaire de confiance.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="engagement-list">
                    <div class="engagement-item">
                        <div class="engagement-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="engagement-text">
                            <h6>Produits de qualité supérieure</h6>
                            <small>Sélection rigoureuse des meilleurs matériaux</small>
                        </div>
                    </div>
                    <div class="engagement-item">
                        <div class="engagement-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="engagement-text">
                            <h6>Service client exceptionnel</h6>
                            <small>Accompagnement personnalisé à chaque étape</small>
                        </div>
                    </div>
                    <div class="engagement-item">
                        <div class="engagement-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="engagement-text">
                            <h6>Respect des délais</h6>
                            <small>Livraisons ponctuelles garanties</small>
                        </div>
                    </div>
                    <div class="engagement-item">
                        <div class="engagement-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="engagement-text">
                            <h6>Prix compétitifs</h6>
                            <small>Le meilleur rapport qualité-prix du marché</small>
                        </div>
                    </div>
                    <div class="engagement-item">
                        <div class="engagement-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="engagement-text">
                            <h6>Accompagnement projet</h6>
                            <small>Conseils d'experts pour votre réussite</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Call to Action -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="cta-content">
                    <h2 class="mb-4">Prêt à démarrer votre projet ?</h2>
                    <p class="lead mb-4">Contactez-nous dès aujourd'hui pour discuter de vos besoins en fibrociment ECOMAT et obtenir un devis personnalisé.</p>
                    <div class="cta-buttons">
                        <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-phone me-2"></i>Nous contacter
                        </a>
                        <a href="{{ route('contact.devis') }}" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-calculator me-2"></i>Demander un devis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Hero Section Moderne */
.hero-modern {
    position: relative;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    overflow: hidden;
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(119, 172, 220, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%);
}

.min-vh-75 {
    min-height: 75vh;
}

.hero-content-modern {
    position: relative;
    z-index: 2;
    color: white;
}

.badge-modern {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
    backdrop-filter: blur(10px);
}

.hero-title-modern {
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    color: white;
}

.hero-description {
    font-size: 1.25rem;
    line-height: 1.6;
    margin-bottom: 2rem;
    color: rgba(255, 255, 255, 0.9);
}

.hero-stats {
    display: flex;
    gap: 2rem;
    margin-top: 2rem;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    line-height: 1;
}

.stat-label {
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.8);
    margin-top: 0.5rem;
}

.hero-image-modern {
    position: relative;
    z-index: 2;
}

.image-container {
    position: relative;
}

.rounded-modern {
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

.floating-card {
    position: absolute;
    bottom: -20px;
    left: 20px;
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    display: flex;
    align-items: center;
    gap: 1rem;
}

.floating-card i {
    font-size: 2rem;
}

/* Sections */
.section-badge {
    display: inline-block;
    background: #77ACDC;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
}

.section-badge-white {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
    backdrop-filter: blur(10px);
}

.section-title-modern {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 1rem;
}

.section-description {
    font-size: 1.125rem;
    color: #718096;
    max-width: 600px;
    margin: 0 auto;
}

/* Story Features */
.story-features {
    padding-left: 2rem;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 2rem;
}

.feature-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #77ACDC, #5a9bd4);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    flex-shrink: 0;
}

.feature-content h5 {
    color: #2d3748;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.feature-content p {
    color: #718096;
    margin: 0;
}

/* Value Cards Modernes */
.value-card-modern {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: 20px;
    text-align: center;
    position: relative;
    transition: all 0.3s ease;
    border: 1px solid #e2e8f0;
    height: 100%;
    overflow: hidden;
}

.value-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    border-color: #77ACDC;
}

.value-icon-modern {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #77ACDC, #5a9bd4);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2rem;
}

.value-card-modern h5 {
    color: #2d3748;
    font-weight: 600;
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.value-card-modern p {
    color: #718096;
    line-height: 1.6;
}

.card-decoration {
    position: absolute;
    top: -50px;
    right: -50px;
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, rgba(119, 172, 220, 0.1), rgba(90, 155, 212, 0.1));
    border-radius: 50%;
    transition: all 0.3s ease;
}

.value-card-modern:hover .card-decoration {
    transform: scale(1.2);
    opacity: 0.8;
}

/* Engagement Section */
.engagement-list {
    padding-left: 1rem;
}

.engagement-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.engagement-item:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateX(10px);
}

.engagement-icon {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.engagement-text h6 {
    color: white;
    font-weight: 600;
    margin: 0 0 0.25rem 0;
}

.engagement-text small {
    color: rgba(255, 255, 255, 0.8);
}

/* CTA Section */
.cta-content {
    padding: 2rem;
}

.cta-buttons {
    margin-top: 2rem;
}

.btn-lg {
    padding: 1rem 2rem;
    font-size: 1.125rem;
    border-radius: 12px;
    font-weight: 600;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title-modern {
        font-size: 2.5rem;
    }

    .hero-stats {
        flex-direction: column;
        gap: 1rem;
    }

    .section-title-modern {
        font-size: 2rem;
    }

    .story-features {
        padding-left: 0;
        margin-top: 2rem;
    }

    .cta-buttons {
        flex-direction: column;
        gap: 1rem;
    }

    .cta-buttons .btn {
        width: 100%;
        margin: 0 !important;
    }
}
</style>
@endsection
