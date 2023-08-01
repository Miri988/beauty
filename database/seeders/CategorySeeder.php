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
                'name' => 'Double-Cleanse',
            ],
            [
                'name' => 'Exfoliators',
            ],
            [
                'name' => 'Toners',
            ],
            [
                'name' => 'Masks',
            ],
            [
                'name' => 'Eye Care',
            ],
            [
                'name' => 'Moisturizers',
            ],
            [
                'name' => 'Sun Protection',
            ],
            [
                'name' => 'Hair & Body',
            ],
            [
                'name' => 'Makeup & Tools',
            ],
        ]);
    }
}
