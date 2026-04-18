<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Novel', 'Teknologi', 'Sains', 'Sejarah', 'Agama'];

    foreach ($data as $item) {
        DB::table('categories')->insert([
            'category' => $item
        ]);
    }
}
}
