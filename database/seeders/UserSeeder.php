<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\ModelUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin user
        ModelUser::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '081234567890',
            'birthdate' => '1980-01-01',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Pasien user
        ModelUser::create([
            'name' => 'Raihan Adhie Kosasih',
            'username' => 'pasien',
            'email' => 'pasien@gmail.com',
            'phone' => '081234567891',
            'birthdate' => '1990-01-01',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);

        // Dokter user
        ModelUser::create([
            'name' => 'Dr. Marsya Yaafi',
            'username' => 'dokter',
            'email' => 'dokter@gmail.com',
            'phone' => '081234567892',
            'birthdate' => '1985-01-01',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);
    }
}
