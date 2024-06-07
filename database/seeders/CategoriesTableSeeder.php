<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        categories::create([
            'category' => 'Technology',
        ]);

        Category::create([
            'category' => 'Health',
        ]);

        Category::create([
            'category' => 'Education',
        ]);

        Category::factory(10)->create(); // Menggunakan factory untuk membuat kategori tambahan
    }
}
