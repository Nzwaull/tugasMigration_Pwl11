<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

    $users = DB::table('users')->pluck('npm');

    foreach ($users as $npm) {
        DB::table('loans')->insert([
            'user_npm' => $npm,
            'loan_at' => $faker->date(),
            'return_at' => $faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
    }
}
