<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maps')->insert([
            [
                'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10074.773304329472!2d4.341225!3d50.855363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc7799151146ebf77!2sMolenGeek!5e0!3m2!1sfr!2sbe!4v1611111415095!5m2!1sfr!2sbe'
            ],
        ]
        );
    }
}
