<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Irena',
                'last_name' => 'Ivanova',
                'email' => Str::random(6).'@gmail.com',
                'password' => Hash::make('12345678'),
                'role_id' => '2',
            ],

            [
                'first_name' => 'Cathy',
                'last_name' => 'Kroff',
                'email' => Str::random(6).'@gmail.com',
                'password' => Hash::make('987654'),
                'role_id' => '3',
            ],

            [
                'first_name' => 'Aileen',
                'last_name' => 'Rose',
                'email' => Str::random(6).'@gmail.com',
                'password' => Hash::make('75315598'),
                'role_id' => '3',
            ],

            [
                'first_name' => 'Mary',
                'last_name' => 'Gift',
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('1597536'),
                'role_id' => '3',
            ],
        ]);
    }
}
