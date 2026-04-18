<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReturnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

    $details = DB::table('loan_detail')->pluck('id');

    foreach ($details as $detail) {
        DB::table('returns')->insert([
            'loan_detail_id' => $detail,
            'charge' => $faker->boolean,
            'amount' => $faker->numberBetween(0, 50000),
        ]);
    }
    }
}
