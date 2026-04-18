<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

    for ($i = 1; $i <= 50; $i++) {
        $angkatan = rand(21, 25);
        $urutan = str_pad($i, 3, '0', STR_PAD_LEFT);
        $npm = "55201{$angkatan}{$urutan}";

        DB::table('users')->insert([
            'npm' => $npm,
            'username' => $faker->userName,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
}
