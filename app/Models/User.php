<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kolom yang boleh diisi (Mass Assignment).
     * Pastikan semua kolom yang Anda buat di migrasi dan seeder ada di sini.
     */
    protected $fillable = [
        'npm',
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * Kolom yang disembunyikan saat data diubah jadi Array/JSON.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting tipe data.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}