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
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 1,
            ],

            [
                'url_img' => '/assets/images/products/k2.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 2,
            ],

            [
                'url_img' => '/assets/images/products/k3.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 3,
            ],

            [
                'url_img' => '/assets/images/products/k4.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 4,
            ],
            [
                'url_img' => '/assets/images/products/k5.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 5,
            ],
            [
                'url_img' => '/assets/images/products/k6.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 6,
            ],
            [
                'url_img' => '/assets/images/products/k7.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 7,
            ],
            [
                'url_img' => '/assets/images/products/k8.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 8,
            ],
            [
                'url_img' => '/assets/images/products/k9.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 9,
            ],
            [
                'url_img' => '/assets/images/products/k10.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 10,
            ],
            [
                'url_img' => '/assets/images/products/k11.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 11,
            ],
            [
                'url_img' => '/assets/images/products/k12.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 12,
            ],
            [
                'url_img' => '/assets/images/products/k13.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 13,
            ],
            [
                'url_img' => '/assets/images/products/k14.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 14,
            ],

            [
                'url_img' => '/assets/images/products/k15.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 15,
            ],

            [
                'url_img' => '/assets/images/products/k16.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 16,
            ],

            [
                'url_img' => '/assets/images/products/k17.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 17,
            ],

            [
                'url_img' => '/assets/images/products/k18.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 18,
            ],

            [
                'url_img' => '/assets/images/products/k19.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 19,
            ],

            [
                'url_img' => '/assets/images/products/k20.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 20,
            ],
            [
                'url_img' => '/assets/images/products/k3_1.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 3,
            ],
            [
                'url_img' => '/assets/images/products/k3_2.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 3,
            ],
            [
                'url_img' => '/assets/images/products/k3_3.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 3,
            ],
            [
                'url_img' => '/assets/images/products/k3_4.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 3,
            ],
            [
                'url_img' => '/assets/images/products/k1_1.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 1,
            ],
            [
                'url_img' => '/assets/images/products/k7_1.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 7,
            ],
            [
                'url_img' => '/assets/images/products/k4_1.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 4,
            ],
            [
                'url_img' => '/assets/images/products/k10_1.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 10,
            ],
            [
                'url_img' => '/assets/images/products/k10_2.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 10,
            ],
            [
                'url_img' => '/assets/images/products/k11_1.jpg',
                'imgable_type' => 'App/Model/Product',
                'imgable_id' => 11,
            ],

        ]);
    }
}
