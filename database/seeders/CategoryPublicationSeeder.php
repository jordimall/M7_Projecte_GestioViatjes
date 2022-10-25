<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_publications')->insert([
            'publication_id' => 1,
            'category_id' => 1    
        ]);
        DB::table('categories_publications')->insert([
            'publication_id' => 1,
            'category_id' => 2    
        ]);
        DB::table('categories_publications')->insert([
            'publication_id' => 1,
            'category_id' => 5    
        ]);
        DB::table('categories_publications')->insert([
            'publication_id' => 2,
            'category_id' => 3    
        ]);
        DB::table('categories_publications')->insert([
            'publication_id' => 3,
            'category_id' => 5    
        ]);
        DB::table('categories_publications')->insert([
            'publication_id' => 3,
            'category_id' => 1    
        ]);
        DB::table('categories_publications')->insert([
            'publication_id' => 4,
            'category_id' => 2    
        ]);
        DB::table('categories_publications')->insert([
            'publication_id' => 4,
            'category_id' => 3   
        ]);
        DB::table('categories_publications')->insert([
            'publication_id' => 5,
            'category_id' => 1    
        ]);
        
    }
}
