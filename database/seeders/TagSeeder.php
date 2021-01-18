<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'tags' => 'Responsive',
            ],
            [
                'tags' => 'HTML5',
            ],
            [
                'tags' => 'CSS3',
            ],
            [
                'tags' => 'JS',
            ],
        ]
        );
    }
}
