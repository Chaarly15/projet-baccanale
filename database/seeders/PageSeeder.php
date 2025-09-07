<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'slug' => 'qui-sommes-nous',
                'title' => 'Qui sommes-nous ?',
                'body' => '<div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h1 class="mb-4">Qui sommes-nous ?</h1>
                            
                            <div class="mb-5">
                                <img src="/assets/images/about-us.jpg" alt="Baccanale équipe" class="img-fluid rounded shadow mb-4">
                            </div>
                            
                            <h3 class="text-primary mb-3">Notre Histoire</h3>
                            <p class="lead">Baccanale est une entreprise ivoirienne spécialisée dans la distribution de plaques ondulées en fibrociment ECOMAT et accessoires de construction.</p>
                            
                            <p>Depuis notre création, nous nous sommes imposés comme un acteur majeur du secteur de la construction en Côte d\'Ivoire. Notre expertise et notre engagement envers la qualité nous permettent de fournir des solutions fiables et durables pour tous vos projets de construction.</p>
                            
                            <h3 class="text-primary mb-3 mt-5">Notre Mission</h3>
                            <p>Nous nous engageons à fournir des matériaux de construction de haute qualité, accompagnés d\'un service client exceptionnel et de conseils techniques professionnels.</p>
                            
                            <h3 class="text-primary mb-3 mt-5">Nos Valeurs</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Qualité des produits</li>
                                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Service client de qualité</li>
                                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Respect des délais</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Expertise technique</li>
                                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Innovation continue</li>
                                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Partenariat durable</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>'
            ],
            [
                'slug' => 'fibrociment',
                'title' => 'Le Fibrociment',
                'body' => '<div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h1 class="mb-4">Le Fibrociment</h1>
                            
                            <h3 class="text-primary mb-3">Qu\'est-ce que le fibrociment ?</h3>
                            <p class="lead">Le fibrociment est un matériau composite constitué de ciment, de fibres et d\'eau, offrant une excellente résistance et durabilité.</p>
                            
                            <h3 class="text-primary mb-3 mt-5">Avantages du fibrociment ECOMAT</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <i class="fas fa-shield-alt text-primary me-2"></i>
                                            <strong>Résistance</strong><br>
                                            <small class="text-muted">Résiste aux intempéries et aux chocs</small>
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-fire text-primary me-2"></i>
                                            <strong>Incombustible</strong><br>
                                            <small class="text-muted">Matériau non inflammable</small>
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-leaf text-primary me-2"></i>
                                            <strong>Écologique</strong><br>
                                            <small class="text-muted">Matériau respectueux de l\'environnement</small>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <i class="fas fa-clock text-primary me-2"></i>
                                            <strong>Durable</strong><br>
                                            <small class="text-muted">Longue durée de vie</small>
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-tools text-primary me-2"></i>
                                            <strong>Facile à installer</strong><br>
                                            <small class="text-muted">Installation simple et rapide</small>
                                        </li>
                                        <li class="mb-3">
                                            <i class="fas fa-euro-sign text-primary me-2"></i>
                                            <strong>Économique</strong><br>
                                            <small class="text-muted">Excellent rapport qualité-prix</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <h3 class="text-primary mb-3 mt-5">Applications</h3>
                            <p>Le fibrociment ECOMAT est idéal pour :</p>
                            <ul>
                                <li>Toitures résidentielles et industrielles</li>
                                <li>Bardages et façades</li>
                                <li>Constructions agricoles</li>
                                <li>Bâtiments commerciaux</li>
                            </ul>
                        </div>
                    </div>
                </div>'
            ],
            [
                'slug' => 'brochure',
                'title' => 'Notre Brochure',
                'body' => '<div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <h1 class="mb-4">Notre Brochure</h1>
                            <p class="lead mb-5">Découvrez notre gamme complète de produits en fibrociment</p>
                            
                            <div class="card shadow-lg border-0 mb-5">
                                <div class="card-body p-5">
                                    <i class="fas fa-file-pdf fa-5x text-primary mb-4"></i>
                                    <h3>Catalogue Produits 2024</h3>
                                    <p class="text-muted mb-4">Téléchargez notre catalogue complet avec toutes les spécifications techniques et les prix de nos produits.</p>
                                    <a href="/assets/documents/catalogue-baccanale-2024.pdf" class="btn btn-primary btn-lg" target="_blank">
                                        <i class="fas fa-download me-2"></i>
                                        Télécharger la brochure
                                    </a>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <div class="card-body text-center">
                                            <i class="fas fa-layer-group fa-3x text-primary mb-3"></i>
                                            <h5>Plaques Ondulées</h5>
                                            <p class="text-muted">Toutes nos plaques en fibrociment</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <div class="card-body text-center">
                                            <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                                            <h5>Accessoires</h5>
                                            <p class="text-muted">Accessoires de fixation et finition</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100 shadow-sm border-0">
                                        <div class="card-body text-center">
                                            <i class="fas fa-calculator fa-3x text-primary mb-3"></i>
                                            <h5>Tarifs</h5>
                                            <p class="text-muted">Grille tarifaire détaillée</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>'
            ]
        ];

        foreach ($pages as $pageData) {
            Page::updateOrCreate(
                ['slug' => $pageData['slug']],
                $pageData
            );
        }
    }
}
