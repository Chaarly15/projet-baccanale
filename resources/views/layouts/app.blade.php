<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Baccanale - Vente de Fibrociment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            /* Charte graphique Baccanale - Bleu, Blanc, Noir */
            --primary-50: #eff6ff;
            --primary-100: #dbeafe;
            --primary-200: #bfdbfe;
            --primary-300: #93c5fd;
            --primary-400: #60a5fa;
            --primary-500: #3b82f6;
            --primary-600: #2563eb;
            --primary-700: #1d4ed8;
            --primary-800: #1e40af;
            --primary-900: #1e3a8a;

            --white-color: #ffffff;
            --black-color: #000000;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--gray-50);
            padding-top: 80px;
            line-height: 1.6;
        }

        .navbar {
            background-color: var(--white-color) !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border-bottom: 1px solid var(--gray-200);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .navbar .navbar-brand img {
            transition: transform 0.3s ease;
        }

        .navbar .navbar-brand:hover img {
            transform: scale(1.05);
        }

        .navbar .navbar-nav .nav-link {
            color: var(--gray-700) !important;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.025em;
            padding: 0.75rem 1.25rem !important;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar .navbar-nav .nav-link:hover {
            color: var(--primary-600) !important;
            background-color: var(--primary-50);
            transform: translateY(-1px);
        }

        .navbar .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-500), var(--primary-600));
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar .navbar-nav .nav-link:hover::after {
            width: 80%;
        }

        .dropdown-menu {
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.12);
            border: 1px solid var(--gray-200);
            padding: 0.75rem 0;
            margin-top: 0.5rem;
            background: var(--white-color);
            backdrop-filter: blur(10px);
        }

        .dropdown-item {
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            color: var(--gray-700);
            transition: all 0.3s ease;
            border-radius: 8px;
            margin: 0 0.5rem;
        }

        .dropdown-item:hover {
            background-color: var(--primary-50);
            color: var(--primary-600);
            transform: translateX(4px);
        }

        /* Centrage du menu en mobile */
        @media (max-width: 991px) {
            .navbar-nav {
                text-align: center;
            }

            .navbar-nav .dropdown-menu {
                text-align: center;
            }

            .navbar-nav .nav-item {
                margin: 0.5rem 0;
            }
        }

        /* Dropdown visible au survol sur desktop */
        /* Effet fade-in + slide pour les dropdowns */
        @media (min-width: 992px) {
            .navbar .dropdown-menu {
                display: block;
                opacity: 0;
                visibility: hidden;
                transform: translateY(10px);
                transition: all 0.3s ease;
                margin-top: 0;
            }

            .navbar .nav-item.dropdown:hover .dropdown-menu {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
        }

        /* --- Section Héro --- */
        .hero-section {
            position: relative;
            padding: 12rem 0;
            background-size: cover;
            background-position: center;
            color: var(--white-color);
            z-index: 1;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.8), rgba(17, 24, 39, 0.7));
            z-index: -1;
        }

        .hero-section .hero-text-box {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 3rem 4rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- Section Nos Produits --- */
        .products-section {
            background: linear-gradient(135deg, var(--primary-50), var(--white-color));
            padding: 6rem 0;
            position: relative;
        }

        .products-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23dbeafe" opacity="0.3"/><circle cx="75" cy="75" r="1" fill="%23dbeafe" opacity="0.3"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.5;
            z-index: 0;
        }

        .products-section .container {
            position: relative;
            z-index: 1;
        }

        .products-section h2 {
            text-align: center;
            margin-bottom: 4rem;
            font-weight: 700;
            font-size: 2.5rem;
            color: var(--gray-900);
            position: relative;
        }

        .products-section h2::after {
            content: '';
            position: absolute;
            bottom: -1rem;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-500), var(--primary-600));
            border-radius: 2px;
        }

        .product-card {
            background: var(--white-color);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 1px solid var(--gray-200);
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
            border-color: var(--primary-200);
        }

        .product-card img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .product-card:hover img {
            transform: scale(1.1);
        }

        .product-card .card-body {
            padding: 2rem;
        }

        .product-card .card-title {
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }

        .product-card .card-text {
            color: var(--gray-600);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        /* --- Section Présentation --- */
        .presentation-section {
            padding: 6rem 0;
            background: var(--white-color);
        }

        .presentation-section h2 {
            text-align: center;
            margin-bottom: 4rem;
            font-weight: 700;
            font-size: 2.5rem;
            color: var(--gray-900);
            position: relative;
        }

        .presentation-section h2::after {
            content: '';
            position: absolute;
            bottom: -1rem;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-500), var(--primary-600));
            border-radius: 2px;
        }

        .presentation-card {
            display: flex;
            flex-wrap: wrap;
            background: linear-gradient(135deg, var(--white-color), var(--gray-50));
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 400px;
            border: 1px solid var(--gray-200);
            transition: all 0.4s ease;
        }

        .presentation-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 30px 60px rgba(37, 99, 235, 0.15);
        }

        .presentation-card .logo-area,
        .presentation-card .text-area {
            flex: 1 1 300px;
            /* Base de 300px, permet de grandir et de passer à la ligne */
        }

        .presentation-card .logo-area {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .presentation-card .logo-area img {
            max-width: 200px;
        }

        .presentation-card .text-area {
            background: linear-gradient(135deg, var(--primary-50), var(--primary-100));
            padding: 4rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .presentation-card .text-area::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, var(--primary-500), var(--primary-600));
        }

        .presentation-card .text-area h3 {
            font-weight: 700;
            font-size: 1.75rem;
            color: var(--gray-900);
            margin-bottom: 1.5rem;
        }

        .presentation-card .text-area p {
            color: var(--gray-700);
            line-height: 1.7;
            font-size: 1.1rem;
        }

        /* MODIFIÉ : Style du bouton "En savoir plus" pour correspondre au design */
        .presentation-card .btn-savoir-plus {
            background-color: var(--white-color);
            color: var(--text-color);
            border: 1px solid #ddd;
            border-radius: 0.25rem;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            display: inline-block;
            margin-top: 1.5rem;
            transition: all 0.3s ease;
            text-align: left;
            max-width: 250px;
            /* Largeur maximale au lieu de fixe */
        }

        .presentation-card .btn-savoir-plus:hover {
            background-color: #f0f0f0;
            border-color: #ccc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        /* --- Section Formulaire & Carte --- */
        .contact-form-section {
            padding: 4rem 0;
            background: linear-gradient(#e9f1fd,
                    /* Bleu foncé en haut */
                    #8db5f0,
                    /* Bleu moyen au centre */
                    #e9f2ff
                    /* Bleu très clair en bas */
                );
        }

        .contact-form-section h2,
        .map-section h2 {
            font-weight: bold;
            color: var(--dark-color);
        }

        .map-section {
            padding: 4rem 0;
            background-color: var(--white-color);
        }

        .map-container {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* --- Footer Moderne avec Charte Bleu/Blanc/Noir --- */
        .main-footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #000000 100%) !important;
            color: #ffffff !important;
            padding: 4rem 0 0 0;
            position: relative;
            overflow: hidden;
        }

        .main-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }

        .main-footer h5 {
            color: #ffffff !important;
            margin-bottom: 1.5rem;
            font-weight: 700;
            font-size: 1.25rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .main-footer h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--primary-color);
        }

        .main-footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .main-footer ul li {
            margin-bottom: 0.75rem;
        }

        .main-footer a {
            color: #e9ecef !important;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            font-size: 0.95rem;
        }

        .main-footer a:hover {
            color: #3b82f6 !important;
            transform: translateX(5px);
        }

        .main-footer a i {
            margin-right: 0.5rem;
            width: 16px;
            text-align: center;
        }

        .footer-contact-info {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-contact-info .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding: 0.5rem 0;
        }

        .footer-contact-info .contact-item:last-child {
            margin-bottom: 0;
        }

        .footer-contact-info .contact-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .footer-contact-info .contact-icon i {
            color: var(--white-color);
            font-size: 1rem;
        }

        .footer-contact-info .contact-text {
            color: #ffffff !important;
            margin: 0;
            font-size: 0.95rem;
        }

        .footer-contact-info .contact-text small {
            color: #adb5bd !important;
            display: block;
            margin-top: 0.25rem;
        }

        .footer-bottom {
            background: #000000 !important;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }

        .footer-bottom p {
            margin: 0;
            color: #adb5bd !important;
            font-size: 0.9rem;
        }

        .social-icons {
            margin-top: 1.5rem;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            color: var(--white-color);
            font-size: 1.2rem;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-icons a:hover {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--white-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.4);
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 900;
            color: #ffffff !important;
            margin-bottom: 1rem;
            display: block;
        }

        .footer-description {
            color: #e9ecef !important;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        /* Force le contraste pour tous les éléments du footer */
        .main-footer * {
            color: inherit !important;
        }

        .main-footer .text-white {
            color: #ffffff !important;
        }

        .main-footer .text-decoration-none {
            color: #e9ecef !important;
        }

        .main-footer .text-decoration-none:hover {
            color: #3b82f6 !important;
        }

        .btn-custom-outline {
            background-color: #fff !important;
            color: #0d6efd !important;
            /* Bleu bootstrap */
            border: 2px solid #0d6efd;
            transition: 0.3s ease;
        }

        .btn-custom-outline:hover {
            background-color: #0d6efd !important;
            color: #fff !important;
        }

        /* Styles pour les nouvelles cards produits */
        .product-card-hover {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }

        .product-card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
        }

        .card-img-wrapper {
            overflow: hidden;
            border-radius: 15px 15px 0 0;
        }

        .card-img-wrapper img {
            transition: transform 0.3s ease;
        }

        .product-card-hover:hover .card-img-wrapper img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            color: var(--primary-600);
            font-size: 1.1rem;
            margin-bottom: 0.75rem;
        }

        .card-text {
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .badge {
            font-size: 0.75rem;
            padding: 0.5rem 0.75rem;
            border-radius: 20px;
        }

        .btn-outline-primary {
            border-color: var(--primary-500);
            color: var(--primary-600);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-500);
            border-color: var(--primary-500);
            color: white;
        }

        /* Animation pour les prix */
        .text-primary {
            color: var(--primary-600) !important;
        }

        /* Responsive pour les cards */
        @media (max-width: 768px) {
            .product-card-hover {
                margin-bottom: 2rem;
            }

            .card-img-wrapper img,
            .card-img-wrapper > div {
                height: 200px !important;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/logo/logo.jpg') }}" alt="Baccanale" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduits" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            NOS PRODUITS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownProduits">
                            <li><a class="dropdown-item" href="{{ route('products.index') }}">
                                <i class="fas fa-th-large me-2"></i>Tous nos produits
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            @php
                                $categories = App\Models\Category::all();
                            @endphp
                            @foreach($categories as $category)
                                <li><a class="dropdown-item" href="{{ route('categories.show', $category->slug) }}">
                                    <i class="fas fa-layer-group me-2"></i>{{ $category->name }}
                                </a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAPropos" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            A PROPOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownAPropos">
                            <li><a class="dropdown-item" href="{{ route('pages.show', 'qui-sommes-nous') }}">
                                <i class="fas fa-users me-2"></i>Qui sommes-nous ?
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('pages.show', 'fibrociment') }}">
                                <i class="fas fa-info-circle me-2"></i>Le fibrociment
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('faq.index') }}">
                                <i class="fas fa-question-circle me-2"></i>FAQ
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownDocumentation"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DOCUMENTATION
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownDocumentation">
                            <li><a class="dropdown-item" href="{{ route('pages.show', 'brochure') }}">
                                <i class="fas fa-book me-2"></i>Notre brochure
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('pages.show', 'fiche-technique-plaques') }}">
                                <i class="fas fa-file-alt me-2"></i>Fiche technique plaques
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('pages.show', 'fiche-technique-accessoires') }}">
                                <i class="fas fa-file-alt me-2"></i>Fiche technique accessoires
                            </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownContact" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            CONTACT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownContact">
                            <li><a class="dropdown-item" href="{{ route('contact.index') }}">
                                <i class="fas fa-envelope me-2"></i>Nous contacter
                            </a></li>
                            <li><a class="dropdown-item" href="{{ route('contact.devis') }}">
                                <i class="fas fa-calculator me-2"></i>Demander un devis
                            </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('hero')

    <main>
        @yield('content')
    </main>

    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <!-- Colonne 1: À propos de Baccanale -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-logo">BACCANALE</div>
                    <p class="footer-description">
                        Spécialiste en fibrociment ECOMAT en Côte d'Ivoire. Nous fournissons des solutions de qualité
                        pour tous vos projets de construction avec un service client exceptionnel.
                    </p>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" aria-label="LinkedIn" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" aria-label="Instagram" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" aria-label="WhatsApp" title="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Colonne 2: Liens rapides -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Nos Produits</h5>
                    <ul>
                        <li><a href="{{ route('products.index') }}">
                            <i class="fas fa-chevron-right"></i>Tous nos produits
                        </a></li>
                        <li><a href="{{ route('categories.show', 'plaques-ondulees') }}">
                            <i class="fas fa-chevron-right"></i>Plaques ondulées
                        </a></li>
                        <li><a href="{{ route('categories.show', 'accessoires-finition') }}">
                            <i class="fas fa-chevron-right"></i>Accessoires finition
                        </a></li>
                        <li><a href="{{ route('categories.show', 'accessoires-fixation') }}">
                            <i class="fas fa-chevron-right"></i>Accessoires fixation
                        </a></li>
                    </ul>
                </div>

                <!-- Colonne 3: Informations -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Informations</h5>
                    <ul>
                        <li><a href="{{ route('pages.show', 'qui-sommes-nous') }}">
                            <i class="fas fa-chevron-right"></i>Qui sommes-nous
                        </a></li>
                        <li><a href="{{ route('pages.show', 'fibrociment') }}">
                            <i class="fas fa-chevron-right"></i>Le fibrociment
                        </a></li>
                        <li><a href="{{ route('faq.index') }}">
                            <i class="fas fa-chevron-right"></i>FAQ
                        </a></li>
                        <li><a href="{{ route('pages.show', 'brochure') }}">
                            <i class="fas fa-chevron-right"></i>Documentation
                        </a></li>
                    </ul>
                </div>

                <!-- Colonne 4: Contact -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Contactez-nous</h5>
                    <div class="footer-contact-info">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                Rue Flesse et Marie Curie<br>
                                Zone 4, Abidjan
                                <small>Côte d'Ivoire</small>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <a href="tel:+22501037353394" class="text-white text-decoration-none">
                                    +225 01 03 735 394
                                </a>
                                <small>Lun - Ven: 8h00 - 17h00</small>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <a href="mailto:contact@baccanale-ci.com" class="text-white text-decoration-none">
                                    contact@baccanale-ci.com
                                </a>
                                <small>Réponse sous 24h</small>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('contact.devis') }}" class="btn btn-primary btn-sm me-2">
                            <i class="fas fa-calculator me-1"></i>Devis gratuit
                        </a>
                        <a href="{{ route('contact.index') }}" class="btn btn-outline-light btn-sm">
                            <i class="fas fa-envelope me-1"></i>Contact
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p>&copy; {{ date('Y') }} <strong>BACCANALE</strong>. Tous droits réservés.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <p class="mb-0">
                            <small>
                                Spécialiste fibrociment ECOMAT |
                                <a href="{{ route('pages.show', 'mentions-legales') }}" class="text-decoration-none">Mentions légales</a> |
                                <a href="{{ route('pages.show', 'politique-confidentialite') }}" class="text-decoration-none">Confidentialité</a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
