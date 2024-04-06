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
        'password' => Hash::make('password'),
        'role' => 'admin',
        ]);

        // Pasien user
        ModelUser::create([
            'name' => 'Pasien',
            'username' => 'pasien',
            'email' => 'pasien@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
        ]);

        // Dokter user
        ModelUser::create([
            'name' => 'Dokter',
            'username' => 'dokter',
            'email' => 'dokter@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);
    }
}
