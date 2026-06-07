<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $categories = [
            ['name' => 'Web Development'],
            ['name' => 'Mobile Programming'],
            ['name' => 'UI/UX Design'],
            ['name' => 'Competitive Programming'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }   
    }
}
