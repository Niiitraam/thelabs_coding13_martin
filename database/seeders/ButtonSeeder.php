<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buttons')->insert([
            [
                'rubrique' => 'Boutton About',
                'btntext' => 'Browse'
            ],
            [
                'rubrique' => 'Boutton Service',
                'btntext' => 'Browse'
            ],
            [
                'rubrique' => 'Boutton Ready',
                'btntext' => 'Send'
            ],
            [
                'rubrique' => 'Boutton Contact',
                'btntext' => 'Browse'
            ],
        ]
        );
    }
}
