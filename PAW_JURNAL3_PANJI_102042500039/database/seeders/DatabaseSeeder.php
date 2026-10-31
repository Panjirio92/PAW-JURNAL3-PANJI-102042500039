<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        
        User::updateOrCreate(
            ['email' => 'dosen@celoe.test'],
            [
                'name' => 'Dosen CeLoe',
                'password' => Hash::make('password'),
                'role' => 'dosen',
                'nomor_induk' => '1122334455',
            ]
        );

        User::updateOrCreate(
            ['email' => 'mahasiswa@celoe.test'],
            [
                'name' => 'Ahamad Prathama',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'nomor_induk' => '1301210001',
            ]
        );
    }
}
