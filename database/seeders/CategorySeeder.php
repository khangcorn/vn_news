<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'World'
            ],
            [
                'name' => 'Politics'
            ],

            [
                'name' => 'Business'
            ],

            [
                'name' => 'Opinion'
            ],

            [
                'name' => 'Health'
            ],

            [
                'name' => 'Entertainment'
            ],

            [
                'name' => 'Style'
            ],

            [
                'name' => 'Sports'
            ],
            [
                'name' => 'Science'

            ],

   [
                'name' => 'Climate'
                
            ],     
         
        ]);
    }
}
