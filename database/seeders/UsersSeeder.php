<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; // Tambahkan ini jika tetap ingin pakai DB
use App\Models\User; // Tambahkan ini untuk menggunakan Model
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');// Pakai locale Indonesia agar nama lebih relevan

        // Di dalam UsersSeeder.php
        for ($i = 1; $i <= 50; $i++) {
            $angkatan = rand(21, 25);
    // Menggunakan $i memastikan urutan 001, 002, dst tidak kembar dalam satu kali jalan
            $urutan = str_pad($i, 3, '0', STR_PAD_LEFT); 
            $npm = "55201{$angkatan}{$urutan}";

            User::updateOrCreate(
                ['npm' => $npm], // Cari berdasarkan NPM
                [
                    'username'   => $faker->unique()->userName,
                    'first_name' => $faker->firstName,
                    'last_name'  => $faker->lastName,
                    'email'      => $faker->unique()->safeEmail,
                    'password'   => Hash::make('password'),
                ]
            );
         }
    }  
}