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
            'slug' => 'news',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Events',
            'slug' => 'event',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Campaigns',
            'slug' => 'campaigns',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Testimonials',
            'slug' => 'testimonials',
            'color' => 'gray'
        ]);

        Category::create([
            'name' => 'Collaboration',
            'slug' => 'colaboration',
            'color' => 'purple'
        ]);
    }
}
