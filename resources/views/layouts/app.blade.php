<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Baccanale - Vente de Fibrociment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --primary-color: #3b82f6;
            /* Bleu plus doux, proche de l'image */
            --light-blue-bg: #e0e8f4;
            /* Fond bleu très clair pour la section produits */
            --mid-light-blue-bg: #89b6e6;
            /* Fond bleu très clair pour la section produits */
            --white-color: #ffffff;
            --dark-color: #1f2937;
            /* Noir/gris foncé pour le footer */
            --text-color: #333;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            padding-top: 70px;
        }

        .navbar {
            background-color: var(--white-color) !important;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar .navbar-nav .nav-link {
            color: #000 !important;
            font-weight: 500;
        }

        .navbar .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .dropdown-menu {
            border-radius: 0.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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
            padding: 10rem 0;
            background-size: cover;
            background-position: center;
            color: var(--white-color);
            z-index: 1;
            height: 600px;
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
            background-color: rgba(30, 40, 50, 0.6);
            z-index: -1;
        }

        .hero-section .hero-text-box {
            background-color: rgba(30, 40, 50, 0.7);
            padding: 1.5rem 2.5rem;
            display: inline-block;
        }

        /* --- Section Nos Produits --- */
        .products-section {
            background-color: var(--mid-light-blue-bg);
            padding: 4rem 0;
        }

        .products-section h2 {
            text-align: center;
            margin-bottom: 2.5rem;
            font-weight: bold;
            color: var(--dark-color);
        }

        .product-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 0.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        /* --- Section Présentation --- */
        .presentation-section {
            padding: 4rem 0;
        }

        .presentation-card {
            display: flex;
            flex-wrap: wrap;
            /* Permet le passage à la ligne sur mobile */
            background-color: var(--white-color);
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 350px;
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
            background-color: var(--mid-light-blue-bg);
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .presentation-card .text-area h3 {
            font-weight: bold;
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

        /* --- Footer Détaillé --- */
        .main-footer {
            background-color: var(--dark-color);
            color: #adb5bd;
            padding: 3rem 0 1rem 0;
        }

        .main-footer h5 {
            color: var(--white-color);
            margin-bottom: 1.5rem;
            font-weight: bold;
        }

        .main-footer ul {
            list-style: none;
            padding: 0;
        }

        .main-footer ul li {
            margin-bottom: 0.75rem;
        }

        .main-footer a {
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .main-footer a:hover {
            color: var(--white-color);
        }

        .footer-bottom {
            border-top: 1px solid #495057;
            text-align: center;
            padding-top: 1rem;
            margin-top: 2rem;
            font-size: 0.9rem;
        }

        .social-icons a {
            font-size: 1.5rem;
            margin-right: 1rem;
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAPropos" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            NOS PRODUITS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownAPropos">
                            <li><a class="dropdown-item" href="#">Nos plmaques</a></li>
                            <li><a class="dropdown-item" href="#">Accessoire de finition</a></li>
                            <li><a class="dropdown-item" href="#">Accessoire de fixation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAPropos" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            A PROPOS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownAPropos">
                            <li><a class="dropdown-item" href="#">Qui sommes-nous ?</a></li>
                            <li><a class="dropdown-item" href="#">Le fibrociment</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownDocumentation"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            DOCUMENTATION
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownDocumentation">
                            <li><a class="dropdown-item" href="#">Notre brochre</a></li>
                            <li><a class="dropdown-item" href="#">Fiche technique plaque</a></li>
                            <li><a class="dropdown-item" href="#">Fiche technique accessoire</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownContact" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            CONTACT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownContact">
                            <li><a class="dropdown-item" href="#">Nous contacter</a></li>
                            <li><a class="dropdown-item" href="#">Demander un devis</a></li>
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
        {{-- ... Le contenu du footer reste inchangé ... --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Adresse</h5>
                    <p>Rue Flesse et Marie Curie, Zone 4</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Baccanale</h5>
                    <ul>
                        <li><a href="#">Produits</a></li>
                        <li><a href="#">À propos</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Contactez-nous</h5>
                    <ul class="list-unstyled">
                        <li>Tel: +225 01 03 735 394</li>
                        <li>Mail: <a href="mailto:contact@baccanale-ci.com">contact@baccanale-ci.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Suivez-nous</h5>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} BACCANALE. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
