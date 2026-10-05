<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Membuat akun admin default agar panel /admin bisa langsung dipakai.
     * PENTING: ganti email & password ini setelah login pertama kali.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@mctn.co.id'],
            [
                'name'              => 'Administrator MCTN',
                'password'          => Hash::make('MctnAdmin#2026'),
                'role'              => 'admin',
                'is_active'         => true,
                'email_verified_at' => now(),
            ]
        );
    }
}
