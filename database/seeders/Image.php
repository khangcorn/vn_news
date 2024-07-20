<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Image extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('images')->insert([
       [
        'url_img' => 'trumb-vs-biden.jpg',
        'new_id' => '1',
       ]
       ]);

    }
}
