<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesHebergementsSeeder extends Seeder
{
    public function run(): void
    {
        $images = [
            ['idHebergement' => 1, 'url' => 'images/hebergements/he1.jpg',
        'estPrincipale' => true],
            ['idHebergement' => 2, 'url' => 'images/hebergements/he1_alt.jpg',
        'estPrincipale' => false],
            ['idHebergement' => 3, 'url' => 'images/hebergements/he2.jpg',
        'estPrincipale' => true],
        ];

        foreach ($images as $image) {
            DB::table('images_hebergements')->updateOrInsert(
                ['idHebergement' => $image['idHebergement'], 'url' => $image['url']],
                $image
            );
        }
    }
}
