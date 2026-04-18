<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

    for ($i = 1; $i <= 50; $i++) {
        DB::table('books')->insert([
            'title' => $faker->sentence(3),
            'author' => $faker->name,
            'year' => $faker->year,
            'publisher' => $faker->company,
            'city' => $faker->city,
            'bookshelf_id' => rand(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}
