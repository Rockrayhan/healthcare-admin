<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('products')->insert([
            'name' => "Killer Soup",
            'description' => 'This is product description',
            'price' =>'120',
            'category_id' =>'1',
            ]);
            DB::table('products')->insert([
            'name' => "Red Dead Redemption",
            'description' => 'This is product description',
            'price' =>'130',
            'category_id' =>'1',
            ]);
            DB::table('products')->insert([
            'name' => "Grand Theft auto",
            'description' => 'This is product description',
            'price' =>'140',
            'category_id' =>'2',
            ]);
            DB::table('products')->insert([
            'name' => "Sacred Games",
            'description' => 'This is product description',
            'price' =>'150',
            'category_id' =>'2',
            ]);
            DB::table('products')->insert([
            'name' => "Homelander",
            'description' => 'This is product description',
            'price' =>'140',
            'category_id' =>'3',
            ]);
            DB::table('products')->insert([
            'name' => "Billy Buthcer",
            'description' => 'This is product description',
            'price' =>'150',
            'category_id' =>'3',
            ]);
    }
}
