<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       // Kode jurusan tetap
    $kodeJurusan = '55201';
    
    // Angkatan random antara 21-25
    $angkatan = fake()->numberBetween(21, 25);
    
    // Urutan 3 digit (001 - 999)
    $urutan = str_pad(fake()->unique()->numberBetween(1, 999), 3, '0', STR_PAD_LEFT);

    return [
        'name' => fake()->name(),
        'npm' => $kodeJurusan . $angkatan . $urutan, // Hasil: 5520122001
        'email' => fake()->unique()->safeEmail(),
        'password' => bcrypt('password'),
        // tambahkan field lain sesuai tabel users Anda
    ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    // public function unverified(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
