<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshelvesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
        DB::table('bookshelves')->insert([
            'code' => 'R' . $i,
            'name' => 'Rak ' . $i,
        ]);
    }
    }
}
