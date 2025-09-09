@extends('layouts.app')

@section('title', 'Le fibrociment - BACCANALE')
@section('meta_description', 'Tout savoir sur le fibrociment ECOMAT : avantages, applications et caractéristiques de ce matériau de construction durable.')

@section('content')
<!-- Hero Section Moderne -->
<section class="hero-modern-fibrociment">
    <div class="hero-gradient-fibrociment"></div>
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <div class="hero-content-modern">
                    <span class="badge-modern">MATÉRIAU DE CONSTRUCTION</span>
                    <h1 class="hero-title-modern">
                        Le fibrociment ECOMAT
                    </h1>
                    <p class="hero-description">
                        Découvrez les avantages exceptionnels du fibrociment ECOMAT : un matériau composite révolutionnaire
                        qui allie résistance, durabilité et esthétique pour tous vos projets de construction.
                    </p>
                    <div class="hero-features">
                        <div class="feature-badge">
                            <i class="fas fa-shield-alt"></i>
                            <span>Résistant</span>
                        </div>
                        <div class="feature-badge">
                            <i class="fas fa-leaf"></i>
                            <span>Écologique</span>
                        </div>
                        <div class="feature-badge">
                            <i class="fas fa-clock"></i>
                            <span>Durable</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image-modern">
                    <div class="image-container-fibro">
                        <img src="{{ asset('assets/images/produit1.jpg') }}" alt="Fibrociment ECOMAT" class="img-fluid rounded-modern">
                        <div class="floating-card-fibro">
                            <i class="fas fa-industry text-primary"></i>
                            <div>
                                <strong>ECOMAT</strong>
                                <small>Fibrociment Premium</small>
                            </div>
                        </div>
                        <div class="quality-badge">
                            <i class="fas fa-certificate"></i>
                            <span>Qualité Certifiée</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Qu'est-ce que le fibrociment -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="text-center mb-5">
                    <span class="section-badge">DÉFINITION</span>
                    <h2 class="section-title-modern">Qu'est-ce que le fibrociment ?</h2>
                    <p class="section-description">Un matériau composite révolutionnaire pour la construction moderne</p>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4">
                        <div class="definition-content">
                            <p class="definition-lead">
                                Le fibrociment est un matériau composite alliant résistance, durabilité et polyvalence pour vos projets de construction.
                            </p>
                            <p class="definition-text">
                                Le fibrociment est un matériau de construction composé de ciment, de fibres et d'eau. Cette combinaison unique offre une excellente résistance aux intempéries, aux chocs et garantit une longue durée de vie sans entretien particulier.
                            </p>
                            <p class="definition-text">
                                Chez BACCANALE, nous distribuons exclusivement les produits <strong class="text-primary">ECOMAT</strong>, reconnus pour leur qualité supérieure et leur conformité aux normes internationales les plus strictes.
                            </p>
                            <div class="definition-highlight">
                                <i class="fas fa-info-circle text-primary me-2"></i>
                                <span>Matériau certifié conforme aux normes européennes CE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="composition-chart">
                            <h5 class="text-primary mb-3">Composition du fibrociment</h5>
                            <div class="composition-item">
                                <div class="composition-bar">
                                    <div class="bar-fill" style="width: 85%;" data-percentage="85%"></div>
                                </div>
                                <span>Ciment Portland - 85%</span>
                            </div>
                            <div class="composition-item">
                                <div class="composition-bar">
                                    <div class="bar-fill" style="width: 10%;" data-percentage="10%"></div>
                                </div>
                                <span>Fibres de renforcement - 10%</span>
                            </div>
                            <div class="composition-item">
                                <div class="composition-bar">
                                    <div class="bar-fill" style="width: 5%;" data-percentage="5%"></div>
                                </div>
                                <span>Additifs - 5%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Avantages -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">AVANTAGES</span>
            <h2 class="section-title-modern">Pourquoi choisir le fibrociment ECOMAT ?</h2>
            <p class="section-description">Des performances exceptionnelles pour tous vos projets de construction</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="advantage-card-modern">
                    <div class="advantage-icon-modern">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Résistance Exceptionnelle</h5>
                    <p>Excellente résistance aux chocs, aux intempéries et aux variations climatiques. Testé dans les conditions les plus extrêmes.</p>
                    <div class="advantage-highlight">
                        <small><i class="fas fa-check text-success me-1"></i>Résistance aux UV</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="advantage-card-modern">
                    <div class="advantage-icon-modern">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5>Durabilité Garantie</h5>
                    <p>Longue durée de vie sans entretien particulier, garantissant un investissement durable sur plusieurs décennies.</p>
                    <div class="advantage-highlight">
                        <small><i class="fas fa-check text-success me-1"></i>Garantie 25 ans</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="advantage-card-modern">
                    <div class="advantage-icon-modern">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h5>Polyvalence Totale</h5>
                    <p>Adapté à de nombreuses applications : toitures, bardages, cloisons, façades et bien plus encore.</p>
                    <div class="advantage-highlight">
                        <small><i class="fas fa-check text-success me-1"></i>Multi-usages</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="advantage-card-modern">
                    <div class="advantage-icon-modern">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h5>Économique</h5>
                    <p>Rapport qualité-prix optimal avec des coûts d'entretien réduits et une installation simplifiée.</p>
                    <div class="advantage-highlight">
                        <small><i class="fas fa-check text-success me-1"></i>ROI élevé</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="advantage-card-modern">
                    <div class="advantage-icon-modern">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h5>Écologique</h5>
                    <p>Matériau respectueux de l'environnement, recyclable et contribuant à la construction durable.</p>
                    <div class="advantage-highlight">
                        <small><i class="fas fa-check text-success me-1"></i>100% recyclable</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="advantage-card-modern">
                    <div class="advantage-icon-modern">
                        <i class="fas fa-fire"></i>
                    </div>
                    <h5>Sécurité Incendie</h5>
                    <p>Matériau incombustible offrant une protection optimale contre les risques d'incendie.</p>
                    <div class="advantage-highlight">
                        <small><i class="fas fa-check text-success me-1"></i>Classe A1</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                    </div>
        </div>
    </div>
</section>

<!-- Section Applications -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-badge">APPLICATIONS</span>
            <h2 class="section-title-modern">Domaines d'utilisation du fibrociment ECOMAT</h2>
            <p class="section-description">Des solutions adaptées à tous vos projets de construction</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="application-card-modern">
                    <div class="application-icon-modern">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="application-content">
                        <h5>Toitures Résidentielles</h5>
                        <p>Plaques ondulées parfaites pour maisons individuelles, villas et résidences. Esthétique et performance garanties.</p>
                        <ul class="application-features">
                            <li><i class="fas fa-check text-success me-2"></i>Maisons individuelles</li>
                            <li><i class="fas fa-check text-success me-2"></i>Villas et résidences</li>
                            <li><i class="fas fa-check text-success me-2"></i>Extensions et annexes</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="application-card-modern">
                    <div class="application-icon-modern">
                        <i class="fas fa-industry"></i>
                    </div>
                    <div class="application-content">
                        <h5>Toitures Industrielles</h5>
                        <p>Solutions robustes pour bâtiments industriels et commerciaux. Résistance et durabilité exceptionnelles.</p>
                        <ul class="application-features">
                            <li><i class="fas fa-check text-success me-2"></i>Usines et entrepôts</li>
                            <li><i class="fas fa-check text-success me-2"></i>Centres commerciaux</li>
                            <li><i class="fas fa-check text-success me-2"></i>Bâtiments agricoles</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="application-card-modern">
                    <div class="application-icon-modern">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="application-content">
                        <h5>Bardages et Façades</h5>
                        <p>Revêtements extérieurs esthétiques et durables pour tous types de constructions modernes.</p>
                        <ul class="application-features">
                            <li><i class="fas fa-check text-success me-2"></i>Façades ventilées</li>
                            <li><i class="fas fa-check text-success me-2"></i>Bardages décoratifs</li>
                            <li><i class="fas fa-check text-success me-2"></i>Habillages techniques</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="application-card-modern">
                    <div class="application-icon-modern">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <div class="application-content">
                        <h5>Cloisons et Séparations</h5>
                        <p>Solutions d'aménagement intérieur et extérieur pour optimiser vos espaces de vie et de travail.</p>
                        <ul class="application-features">
                            <li><i class="fas fa-check text-success me-2"></i>Cloisons intérieures</li>
                            <li><i class="fas fa-check text-success me-2"></i>Séparations extérieures</li>
                            <li><i class="fas fa-check text-success me-2"></i>Aménagements sur mesure</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Spécifications Techniques -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4">
                <div class="specs-content">
                    <span class="section-badge">SPÉCIFICATIONS</span>
                    <h2 class="section-title-modern">Caractéristiques techniques</h2>
                    <p class="lead text-muted mb-4">
                        Le fibrociment ECOMAT répond aux normes les plus strictes et offre des performances exceptionnelles.
                    </p>

                    <div class="specs-grid">
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="fas fa-thermometer-half"></i>
                            </div>
                            <div class="spec-details">
                                <strong>Résistance thermique</strong>
                                <span>-40°C à +80°C</span>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="fas fa-weight-hanging"></i>
                            </div>
                            <div class="spec-details">
                                <strong>Densité</strong>
                                <span>1,6 à 1,8 g/cm³</span>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="fas fa-ruler"></i>
                            </div>
                            <div class="spec-details">
                                <strong>Épaisseurs</strong>
                                <span>6mm à 12mm</span>
                            </div>
                        </div>
                        <div class="spec-item">
                            <div class="spec-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="spec-details">
                                <strong>Certification</strong>
                                <span>ISO 9001 & CE</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="specs-visual">
                    <img src="{{ asset('assets/images/produit2.jpg') }}" alt="Spécifications fibrociment" class="img-fluid rounded-modern">
                    <div class="specs-overlay">
                        <div class="overlay-content">
                            <h5>Garantie 25 ans</h5>
                            <p>Qualité et durabilité certifiées</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="cta-content-modern">
                    <h2 class="text-white mb-3">Prêt à démarrer votre projet avec ECOMAT ?</h2>
                    <p class="lead mb-0 text-white-50">
                        Notre équipe d'experts est à votre disposition pour vous accompagner dans le choix
                        des produits les mieux adaptés à votre projet de construction.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="cta-buttons-modern">
                    <a href="{{ route('contact.index') }}" class="btn btn-light btn-lg me-2 mb-2">
                        <i class="fas fa-envelope me-2"></i>Nous contacter
                    </a>
                    <a href="{{ route('contact.devis') }}" class="btn btn-outline-light btn-lg mb-2">
                        <i class="fas fa-calculator me-2"></i>Demander un devis
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Hero Section Fibrociment */
.hero-modern-fibrociment {
    position: relative;
    background: linear-gradient(135deg, #000000 0%, #2d3748 50%, #77ACDC 100%);
    overflow: hidden;
}

.hero-gradient-fibrociment {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(119, 172, 220, 0.9) 100%);
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

.hero-features {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-top: 2rem;
}

.feature-badge {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(255, 255, 255, 0.1);
    padding: 0.75rem 1rem;
    border-radius: 25px;
    color: white;
    font-weight: 500;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.hero-image-modern {
    position: relative;
    z-index: 2;
}

.image-container-fibro {
    position: relative;
}

.rounded-modern {
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
}

.floating-card-fibro {
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

.floating-card-fibro i {
    font-size: 2rem;
}

.quality-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: #77ACDC;
    color: white;
    padding: 0.75rem 1rem;
    border-radius: 25px;
    font-size: 0.875rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    box-shadow: 0 5px 15px rgba(119, 172, 220, 0.3);
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

/* Definition Content */
.definition-content {
    padding: 1rem 0;
}

.definition-lead {
    font-size: 1.375rem;
    font-weight: 500;
    line-height: 1.6;
    color: #2d3748;
    margin-bottom: 1.5rem;
    padding: 1.5rem;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    border-radius: 15px;
    border-left: 4px solid #77ACDC;
}

.definition-text {
    font-size: 1.125rem;
    line-height: 1.8;
    color: #4a5568;
    margin-bottom: 1.25rem;
    text-align: justify;
}

.definition-text strong {
    color: #77ACDC;
    font-weight: 600;
}

.definition-highlight {
    background: #f0f9ff;
    padding: 1rem 1.5rem;
    border-radius: 12px;
    border: 1px solid #bae6fd;
    margin-top: 1.5rem;
    display: flex;
    align-items: center;
    font-size: 1rem;
    color: #0369a1;
    font-weight: 500;
}

/* Composition Chart */
.composition-chart {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.composition-item {
    margin-bottom: 1.5rem;
}

.composition-bar {
    height: 8px;
    background: #e2e8f0;
    border-radius: 4px;
    margin-bottom: 0.5rem;
    overflow: hidden;
}

.bar-fill {
    height: 100%;
    background: linear-gradient(90deg, #77ACDC, #5a9bd4);
    border-radius: 4px;
    transition: width 1s ease-in-out;
}

/* Advantage Cards Modernes */
.advantage-card-modern {
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

.advantage-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    border-color: #77ACDC;
}

.advantage-icon-modern {
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

.advantage-card-modern h5 {
    color: #2d3748;
    font-weight: 600;
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.advantage-card-modern p {
    color: #718096;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.advantage-highlight {
    background: #f0f9ff;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    border: 1px solid #e0f2fe;
}

.advantage-highlight small {
    color: #0369a1;
    font-weight: 500;
}

/* Application Cards */
.application-card-modern {
    background: white;
    padding: 2rem;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    gap: 1.5rem;
}

.application-card-modern:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    border-color: #77ACDC;
}

.application-icon-modern {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #77ACDC, #5a9bd4);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 2rem;
    flex-shrink: 0;
}

.application-content h5 {
    color: #2d3748;
    font-weight: 600;
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.application-content p {
    color: #718096;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.application-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.application-features li {
    padding: 0.25rem 0;
    color: #4a5568;
    font-size: 0.9rem;
}

/* Specifications Section */
.specs-content {
    padding-right: 2rem;
}

.specs-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    margin-top: 2rem;
}

.spec-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8fafc;
    border-radius: 15px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}

.spec-item:hover {
    background: white;
    border-color: #77ACDC;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.spec-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #77ACDC, #5a9bd4);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.spec-details strong {
    display: block;
    color: #2d3748;
    font-weight: 600;
    margin-bottom: 0.25rem;
}

.spec-details span {
    color: #718096;
    font-size: 0.9rem;
}

.specs-visual {
    position: relative;
}

.specs-overlay {
    position: absolute;
    bottom: 20px;
    left: 20px;
    right: 20px;
    background: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 1.5rem;
    border-radius: 15px;
    backdrop-filter: blur(10px);
}

.overlay-content h5 {
    color: white;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.overlay-content p {
    color: rgba(255, 255, 255, 0.8);
    margin: 0;
    font-size: 0.9rem;
}

/* CTA Section */
.cta-content-modern h2 {
    font-size: 2.25rem;
    font-weight: 700;
}

.cta-buttons-modern {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    justify-content: flex-end;
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

    .hero-features {
        flex-direction: column;
        gap: 0.5rem;
    }

    .section-title-modern {
        font-size: 2rem;
    }

    .floating-card-fibro {
        position: static;
        margin-top: 1rem;
    }

    .quality-badge {
        position: static;
        margin-bottom: 1rem;
        align-self: flex-start;
    }

    .application-card-modern {
        flex-direction: column;
        text-align: center;
    }

    .specs-content {
        padding-right: 0;
        margin-bottom: 2rem;
    }

    .specs-grid {
        grid-template-columns: 1fr;
    }

    .cta-content-modern h2 {
        font-size: 1.75rem;
    }

    .cta-buttons-modern {
        justify-content: center;
        margin-top: 2rem;
    }

    .cta-buttons-modern .btn {
        width: 100%;
        margin: 0 0 0.5rem 0 !important;
    }

    /* Amélioration lisibilité mobile pour la définition */
    .definition-lead {
        font-size: 1.25rem;
        padding: 1rem;
        text-align: left;
    }

    .definition-text {
        font-size: 1.1rem;
        line-height: 1.7;
        text-align: left;
    }

    .definition-highlight {
        padding: 0.875rem 1rem;
        font-size: 0.95rem;
    }
}
</style>
@endsection