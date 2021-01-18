<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'photo' => '1.jpg',
                'nom' => 'Manderveld',
                'prenom' => 'Martin',
                'fonction' => 'CEO',
            ],
            [
                'photo' => '2.jpg',
                'nom' => 'Sbah',
                'prenom' => 'Imad',
                'fonction' => 'Manager',
            ],
            [
                'photo' => '3.jpg',
                'nom' => 'Cubeddu',
                'prenom' => 'Jordano',
                'fonction' => 'Boss',
            ],
        ]
        );
    }
}
