<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plaqueCategory = Category::where('slug', 'plaques-ondulees')->first();
        $finitionCategory = Category::where('slug', 'accessoires-finition')->first();
        $fixationCategory = Category::where('slug', 'accessoires-fixation')->first();

        $products = [
            // Plaques Ondulées
            [
                'name' => 'Plaque Ondulée ECOMAT 2,44m x 1,10m',
                'slug' => 'plaque-ondulee-ecomat-244-110',
                'description' => 'Plaque ondulée en fibrociment ECOMAT de dimensions 2,44m x 1,10m. Idéale pour toitures résidentielles et industrielles. Résistante aux intempéries et aux UV.',
                'price' => 15000,
                'category_id' => $plaqueCategory->id
            ],
            [
                'name' => 'Plaque Ondulée ECOMAT 3,05m x 1,10m',
                'slug' => 'plaque-ondulee-ecomat-305-110',
                'description' => 'Plaque ondulée en fibrociment ECOMAT de dimensions 3,05m x 1,10m. Format long pour réduire les joints et optimiser l\'étanchéité.',
                'price' => 18500,
                'category_id' => $plaqueCategory->id
            ],
            [
                'name' => 'Plaque Ondulée ECOMAT 1,83m x 1,10m',
                'slug' => 'plaque-ondulee-ecomat-183-110',
                'description' => 'Plaque ondulée en fibrociment ECOMAT de dimensions 1,83m x 1,10m. Format compact pour petites surfaces et finitions.',
                'price' => 12000,
                'category_id' => $plaqueCategory->id
            ],

            // Accessoires de Finition
            [
                'name' => 'Faîtière Universelle ECOMAT',
                'slug' => 'faitiere-universelle-ecomat',
                'description' => 'Faîtière universelle en fibrociment pour finition de faîtage. Compatible avec toutes les plaques ondulées ECOMAT.',
                'price' => 3500,
                'category_id' => $finitionCategory->id
            ],
            [
                'name' => 'Closoir Latéral ECOMAT',
                'slug' => 'closoir-lateral-ecomat',
                'description' => 'Closoir latéral pour étanchéité des rives. Assure une finition parfaite et une protection contre les infiltrations.',
                'price' => 2800,
                'category_id' => $finitionCategory->id
            ],
            [
                'name' => 'Gouttière PVC 125mm',
                'slug' => 'gouttiere-pvc-125mm',
                'description' => 'Gouttière en PVC de 125mm de diamètre. Système d\'évacuation des eaux pluviales complet avec accessoires.',
                'price' => 4200,
                'category_id' => $finitionCategory->id
            ],

            // Accessoires de Fixation
            [
                'name' => 'Tire-fond Galvanisé 8x120mm',
                'slug' => 'tire-fond-galvanise-8x120',
                'description' => 'Tire-fond galvanisé 8x120mm avec rondelle étanche. Fixation sécurisée pour plaques fibrociment sur charpente bois.',
                'price' => 150,
                'category_id' => $fixationCategory->id
            ],
            [
                'name' => 'Crochet de Sécurité Inox',
                'slug' => 'crochet-securite-inox',
                'description' => 'Crochet de sécurité en acier inoxydable pour fixation d\'échelles et équipements de sécurité sur toiture.',
                'price' => 850,
                'category_id' => $fixationCategory->id
            ],
            [
                'name' => 'Kit de Fixation Complet',
                'slug' => 'kit-fixation-complet',
                'description' => 'Kit complet de fixation pour 10m² de couverture. Comprend tire-fonds, rondelles, joints et accessoires.',
                'price' => 12500,
                'category_id' => $fixationCategory->id
            ]
        ];

        foreach ($products as $productData) {
            Product::updateOrCreate(
                ['slug' => $productData['slug']],
                $productData
            );
        }
    }
}
