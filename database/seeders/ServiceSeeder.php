<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'main_title' => 'GET IN THE LAB AND SEE THE (SERVICES)',
                'icone' =>'flaticon-023-flask',
                'titre_service' => 'GET IN THE LAB',
                'texte_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => "BROWSE",

            ],
            [
                'main_title' => null,
                'icone' =>'flaticon-011-compass',
                'titre_service' => 'Projects online',
                'texte_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icone' =>'flaticon-037-idea',
                'titre_service' => 'SMART MARKETING',
                'texte_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icone' =>'flaticon-039-vector',
                'titre_service' => 'Social Media',
                'texte_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icone' =>'flaticon-036-brainstorming',
                'titre_service' => 'Brainstorming',
                'texte_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icone' =>'flaticon-026-search',
                'titre_service' => 'Documented',
                'texte_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icone' =>'flaticon-018-laptop-1',
                'titre_service' => 'Responsive',
                'texte_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icone' =>'flaticon-043-sketch',
                'titre_service' => 'Retina ready',
                'texte_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ],
            [
                'main_title' => null,
                'icone' =>'flaticon-012-cube',
                'titre_service' => 'Ultra modern',
                'texte_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'button' => null,

            ]
        ]
    );
    }
}
