<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'url_img' => '',
                'img_type' => '',
                'img_id' => '',
            ],

            [
                'url_img' => '',
                'img_type' => '',
                'img_id' => '',
            ],

            [
                'url_img' => '',
                'img_type' => '',
                'img_id' => '',
            ],

            [
                'url_img' => '',
                'img_type' => '',
                'img_id' => '',
            ],
        ]);
    }
}
