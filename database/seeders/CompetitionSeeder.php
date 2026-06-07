<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Competition::create([
            'title' => 'Hackathon Nasional 2026',
            'description' => 'Lomba pengembangan aplikasi inovatif tingkat nasional untuk mahasiswa.',
            'poster' => null,
            'registration_link' => 'https://hackathon2026.test/register',
            'deadline' => \Carbon\Carbon::now()->addDays(30), // Deadline 30 hari dari sekarang
            'user_id' => 1, // Dibuat oleh Admin Yudi
            'category_id' => 1, // Web Development
            'level_id' => 2, // Nasional
        ]);
        
        \App\Models\Competition::create([
            'title' => 'Gemastik - UI/UX',
            'description' => 'Desain antarmuka aplikasi yang ramah pengguna dan solutif.',
            'poster' => null,
            'registration_link' => 'https://gemastik.test',
            'deadline' => \Carbon\Carbon::now()->addDays(15), 
            'user_id' => 1, 
            'category_id' => 3, // UI/UX
            'level_id' => 2, // Nasional
        ]);
    }
}
