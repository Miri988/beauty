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
                'url_img' => '/assets/images/products/k1.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 1,
            ],

            [
                'url_img' => '/assets/images/products/k2.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 2,
            ],

            [
                'url_img' => '/assets/images/products/k3.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 3,
            ],

            [
                'url_img' => '/assets/images/products/k4.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 4,
            ],
            [
                'url_img' => '/assets/images/products/k5.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 5,
            ],
            [
                'url_img' => '/assets/images/products/k6.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 6,
            ],
            [
                'url_img' => '/assets/images/products/k7.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 7,
            ],
            [
                'url_img' => '/assets/images/products/k8.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 8,
            ],
            [
                'url_img' => '/assets/images/products/k9.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 9,
            ],
            [
                'url_img' => '/assets/images/products/k910.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 10,
            ],
            [
                'url_img' => '/assets/images/products/k11.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 11,
            ],
            [
                'url_img' => '/assets/images/products/k12.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 12,
            ],
            [
                'url_img' => '/assets/images/products/k13.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 13,
            ],
            [
                'url_img' => '/assets/images/products/k14.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 14,
            ],

            [
                'url_img' => '/assets/images/products/k15.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 15,
            ],

            [
                'url_img' => '/assets/images/products/k16.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 16,
            ],

            [
                'url_img' => '/assets/images/products/k17.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 17,
            ],

            [
                'url_img' => '/assets/images/products/k18.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 18,
            ],

            [
                'url_img' => '/assets/images/products/k19.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 19,
            ],

            [
                'url_img' => '/assets/images/products/k20.jpg',
                'img_type' => 'App/Model/Product',
                'img_id' => 20,
            ],
        ]);
    }
}
