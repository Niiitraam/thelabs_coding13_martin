<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            [
                'rubrique' => 'Titre About',
                'titre' => 'GET IN THE LAB AND DISCOVER THE WORLD',
            ],
            [
                'rubrique' => 'Titre Testimonials',
                'titre' => 'WHAT OUR CLIENTS SAY',
            ],
            [
                'rubrique' => 'Titre Service',
                'titre' => 'GET IN THE LAB AND SEE THE SERVICES',
            ],
            [
                'rubrique' => 'Titre Team',
                'titre' => 'GET IN THE LAB AND MEET THE TEAM',
            ],
            [
                'rubrique' => 'Titre Ready',
                'titre' => 'Are you ready to stand out?',
            ],
            [
                'rubrique' => 'Sous-titre Ready',
                'titre' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
            ],
            [
                'rubrique' => 'Titre Contact',
                'titre' => 'CONTACT US',
            ],
            [
                'rubrique' => 'Sous-titre Contact',
                'titre' => 'Main Office',
            ],
            [
                'rubrique' => 'Titre service première section',
                'titre' => 'GET IN THE LAB AND SEE THE SERVICES',
            ],
            [
                'rubrique' => 'Titre deuxième section service',
                'titre' => 'GET IN THE LAB AND DISCOVER THE WORLD'
            ],
        ]
        );
    }
}
