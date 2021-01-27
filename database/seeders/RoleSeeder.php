<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'fonction' => 'Visiteur',
            ],
        ]
        );
        DB::table('roles')->insert([
            [
                'fonction' => 'Membre',
            ],
        ]
        );
        DB::table('roles')->insert([
            [
                'fonction' => 'Rédacteur',
            ],
        ]
        );
        DB::table('roles')->insert([
            [
                'fonction' => 'Webmaster',
            ],
        ]
        );
        DB::table('roles')->insert([
            [
                'fonction' => 'Administrateur',
            ],
        ]
        );
    }
}