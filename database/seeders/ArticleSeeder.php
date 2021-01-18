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
            ],
        ]
        );
    }
}
