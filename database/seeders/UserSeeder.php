<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Yudi Admin',
            'email' => 'admin@portal.com',
            'password' => \Hash::make('password'),
            'role' => 'admin',
        ]);

        \App\Models\User::create([
            'name' => 'Akhmad Daffa Azzikri',
            'email' => '2410817110002@mhs.ulm.ac.id',
            'password' => \Hash::make('password'),
            'role' => 'mahasiswa',
        ]);
    }
}
