<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name'=>'Costa'],
            ['name'=>'Ciutat'],
            ['name'=>'Muntanya'],
            ['name'=>'Rural'],
            ['name'=>'Gastronomia'],
            ['name'=>"Esport d'aventura"],
        ];
        Category::insert($categories);
    }
}
