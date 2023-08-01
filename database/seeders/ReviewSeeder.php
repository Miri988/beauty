<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'title' => 'VERY MOISTURIZING',
                'rating' => 4,
                'description' => 'I didn’t know how effective the gel cream would be since I was skeptical of the texture, but my sensitive skin loved it and I didn’t even break out when I first started using it. Love it!',
                'user_id' => 2,
                'product_id' => 1,
            ],

            [
                'title' => 'REALLY LIGHT AND NOT STICKY.',
                'rating' => 5,
                'description' => 'Really light and not sticky. My skin soaked it right up! I mix it with the green tea products and it helps balance my combo skin.',
                'user_id' => 3,
                'product_id' => 1,
            ],

            [
                'title' => 'Tried the kit since it',
                'rating' => '5',
                'description' => 'Tried the kit since it was my first time trying this product line. So far I really am enjoying it and it gives my skin a smooth and fresh look morning and night!',
                'user_id' => 4,
                'product_id' => 1,
            ],
        ]);
    }
}
