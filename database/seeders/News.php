<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class News extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
          $i = 0;
        $title =  Str::random(10);
        $content = Str::random(100);
      
        
        for ($i = 1; $i < 10; $i++) {
            DB::table('news')->insert([
                'title' => $title,
                'content' => $content,
                'category_id' => $i,
                'user_id' => 1,

            ]);
        }
    }
}
