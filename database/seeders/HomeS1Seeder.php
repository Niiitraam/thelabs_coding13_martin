<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeS1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_s1_s')->insert([
            [
                'text1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi officiis commodi, quisquam sequi ut aspernatur totam, eligendi porro praesentium quae distinctio! Commodi delectus perspiciatis culpa ducimus. Voluptatum quis ab explicabo dolore, molestias numquam similique, mollitia, praesentium quos officia voluptatibus temporibus.',
                'text2' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptate necessitatibus cumque unde aliquam alias nam quos facere, ad quis eos dicta dolore blanditiis maiores deserunt corporis magnam fugit mollitia libero recusandae quisquam? Accusamus voluptates aspernatur dolor eaque itaque sunt mollitia magni fuga amet! Quae.',
            ],
        ]
        );
    }
}
