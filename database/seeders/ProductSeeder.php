<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'title' => 'Dewy Glow Jelly Cream',
                'rating' => rand(0,5),
                'price' => 26.00,
                'description' => 'A gel moisturizer packed with glow-boosting Cherry Blossom Extracts, visibly brightening niacinamide, and hydrating betaine from sugar beets. Advanced with glycerin and Cherry Blossom flavanoids with visibly soothing and moisturizing benefits for skin that’s ready for makeup! Dermatologist tested.',
                'size' => '50 ml',
                'quantity' => rand(0,100),
                'vendor_code' => Str::random(10),
                'specification' => 'A clear, water-jelly cream with Cherry Blossom and Niacinamide that delivers a burst of hydration and glow for visibly brighter, dewy skin.',
                'ingredients' => 'Cherry Blossom Flavonoids, Niacinamide, Sugar Beet Betaine',
                'use' => 'A clear, water-jelly cream with Cherry Blossom and Niacinamide that delivers a burst of hydration and glow for visibly brighter, dewy skin.',
                'category_id' => 1,
                
            ],
        ]);
            
    }
}
