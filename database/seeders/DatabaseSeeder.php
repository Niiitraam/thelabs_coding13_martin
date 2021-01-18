<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ServiceSeeder::class,
            TitreSeeder::class,
            HomeS1Seeder::class,
            VideoSeeder::class,
            ButtonSeeder::class,
            ContactSeeder::class,
            TemoignageSeeder::class,
            TeamSeeder::class,
            TagSeeder::class,
            ArticleSeeder::class,
            ArticleTagSeeder::class,
        ]);
    }
}
