<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'image' => 'card-1.jpg',
                'date' => '02 jan',
                'titre' => 'Gang',
                'auteur' => 'NIIITRAAM',
                'texte' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sed, perspiciatis omnis dolore rem dolorum, assumenda architecto dicta ratione quis alias repellendus ut quisquam earum delectus ducimus qui minus saepe.',
                'check' => 'oui',
            ],
            [
                'image' => 'card-2.jpg',
                'date' => '03 jan',
                'titre' => 'Le cheval',
                'auteur' => 'Emilie',
                'texte' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sed, perspiciatis omnis dolore rem dolorum, assumenda architecto dicta ratione quis alias repellendus ut quisquam earum delectus ducimus qui minus saepe.',
                'check' => 'non',
            ],
            [
                'image' => 'card-2.jpg',
                'date' => '04 jan',
                'titre' => 'Le chien',
                'auteur' => 'Jacques',
                'texte' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sed, perspiciatis omnis dolore rem dolorum, assumenda architecto dicta ratione quis alias repellendus ut quisquam earum delectus ducimus qui minus saepe.',
                'check' => 'oui',
            ],
        ]
        );
    }
}
