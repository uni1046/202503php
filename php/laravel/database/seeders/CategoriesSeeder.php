<?php

namespace Database\Seeders;

use App\Models\Categories;
use Database\Factories\CategoriesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //创建10条假分类
        Categories::factory()->count(10)->create();
    }
}
