<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'categorie' => 'Gang',
            ],
            [
                'categorie' => 'Animaux',
            ],
            [
                'categorie' => 'Logiciel',
            ],
            [
                'categorie' => 'Teamate',
            ],
        ]
        );
    }
}
