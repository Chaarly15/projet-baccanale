<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Qu\'est-ce que le fibrociment ECOMAT ?',
                'answer' => 'Le fibrociment ECOMAT est un matériau composite constitué de ciment, de fibres et d\'eau. Il offre une excellente résistance aux intempéries, aux chocs et aux UV. C\'est un matériau incombustible, durable et respectueux de l\'environnement, idéal pour les toitures et bardages.'
            ],
            [
                'question' => 'Quelles sont les dimensions disponibles pour les plaques ondulées ?',
                'answer' => 'Nous proposons plusieurs dimensions de plaques ondulées ECOMAT :
- 2,44m x 1,10m (format standard)
- 3,05m x 1,10m (format long)
- 1,83m x 1,10m (format compact)

Toutes nos plaques ont une épaisseur de 6mm et sont compatibles avec nos accessoires de fixation et de finition.'
            ],
            [
                'question' => 'Comment fixer les plaques ondulées ECOMAT ?',
                'answer' => 'Les plaques ondulées ECOMAT se fixent à l\'aide de tire-fonds galvanisés avec rondelles étanches. Il est recommandé de :
- Percer préalablement les plaques
- Utiliser des tire-fonds de 8x120mm minimum
- Respecter un espacement de 60cm entre les fixations
- Fixer uniquement sur les ondes hautes
- Prévoir un recouvrement de 20cm entre les plaques'
            ],
            [
                'question' => 'Quelle est la durée de vie des plaques fibrociment ?',
                'answer' => 'Les plaques ondulées en fibrociment ECOMAT ont une durée de vie exceptionnelle de 30 à 50 ans selon les conditions climatiques. Elles résistent parfaitement aux intempéries, aux UV, aux variations de température et ne se déforment pas avec le temps.'
            ],
            [
                'question' => 'Proposez-vous un service de livraison ?',
                'answer' => 'Oui, nous proposons un service de livraison sur toute la Côte d\'Ivoire. Les frais de livraison varient selon la distance et la quantité commandée. Pour Abidjan et ses environs, la livraison est gratuite à partir de 500 000 FCFA d\'achat. Contactez-nous pour un devis de livraison personnalisé.'
            ],
            [
                'question' => 'Puis-je obtenir un devis gratuit ?',
                'answer' => 'Absolument ! Nous proposons des devis gratuits et sans engagement. Vous pouvez faire votre demande en ligne via notre formulaire de devis ou nous contacter directement. Notre équipe vous répondra sous 24h avec un devis détaillé adapté à votre projet.'
            ],
            [
                'question' => 'Quels accessoires sont nécessaires pour une installation complète ?',
                'answer' => 'Pour une installation complète, vous aurez besoin de :
- Plaques ondulées ECOMAT
- Tire-fonds galvanisés avec rondelles étanches
- Faîtières pour les arêtes
- Closoirs latéraux pour les rives
- Gouttières pour l\'évacuation des eaux
- Crochets de sécurité si nécessaire

Nous proposons des kits complets pour simplifier vos achats.'
            ],
            [
                'question' => 'Les plaques fibrociment sont-elles écologiques ?',
                'answer' => 'Oui, le fibrociment ECOMAT est un matériau respectueux de l\'environnement. Il est fabriqué à partir de matières premières naturelles (ciment, fibres, eau) et ne contient pas d\'amiante. Il est recyclable en fin de vie et sa production génère peu d\'émissions de CO2.'
            ]
        ];

        foreach ($faqs as $faqData) {
            Faq::updateOrCreate(
                ['question' => $faqData['question']],
                $faqData
            );
        }
    }
}
