<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'News',
            'slug' => 'news'
        ]);

        Category::create([
            'name' => 'Events',
            'slug' => 'event'
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);

        Category::create([
            'name' => 'Campaigns',
            'slug' => 'campaigns'
        ]);

        Category::create([
            'name' => 'Testimonials',
            'slug' => 'testimonials'
        ]);

        Category::create([
            'name' => 'Collaboration',
            'slug' => 'colaboration'
        ]);
    }
}
