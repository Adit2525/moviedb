<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')-> insert([

        [
            'category_name' => 'Actions',
            'description' => 'Film dengan adegan aksi yang sangat bagus',
            'created_at'=> now(),
            'updated_at'=> now(),
        ],
        [
            'category_name' => 'Comedy',
            'description' => 'Film dengan adegan comedy yang jenaka',
            'created_at'=> now(),
            'updated_at'=> now(),
        ],
        [
            'category_name' => 'Drama',
            'description' => 'Film dengan pengembangan karakter dan konflik',
            'created_at'=> now(),
            'updated_at'=> now(),
        ],
        [
            'category_name' => 'Sci-fi',
            'description' => 'Film tentang technology',
            'created_at'=> now(),
            'updated_at'=> now(),
        ],
        [
            'category_name' => 'Romance',
            'description' => 'Film dengan adegan adegan percintaan yang sangat romantis',
            'created_at'=> now(),
            'updated_at'=> now(),
        ],
    ]);
    }
}
