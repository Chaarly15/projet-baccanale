<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Plaques Ondulées',
                'slug' => 'plaques-ondulees',
                'description' => 'Plaques ondulées en fibrociment ECOMAT pour toitures et bardages'
            ],
            [
                'name' => 'Accessoires de Finition',
                'slug' => 'accessoires-finition',
                'description' => 'Accessoires pour la finition et l\'étanchéité de vos toitures'
            ],
            [
                'name' => 'Accessoires de Fixation',
                'slug' => 'accessoires-fixation',
                'description' => 'Systèmes de fixation et éléments de montage pour plaques fibrociment'
            ]
        ];

        foreach ($categories as $categoryData) {
            Category::updateOrCreate(
                ['slug' => $categoryData['slug']],
                $categoryData
            );
        }
    }
}
