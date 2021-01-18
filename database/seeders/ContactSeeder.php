<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'text' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
                'rue' => 'rue Bruyn 62',
                'ville' => 'Bruxelles',
                'numero' => '0471/52.55.27',
                'email' => 'martinmdvld@gmail.com',
            ],
        ]
        );
    }
}
