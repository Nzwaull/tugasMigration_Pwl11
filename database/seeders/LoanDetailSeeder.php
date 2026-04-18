<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = \Faker\Factory::create();

    $loans = DB::table('loans')->pluck('id');

    foreach ($loans as $loan) {
        DB::table('loan_detail')->insert([
            'loan_id' => $loan,
            'book_id' => rand(1, 50),
            'is_return' => $faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}
