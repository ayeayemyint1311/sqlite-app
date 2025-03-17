<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Aye Aye Myint',
            'email' => 'admin@gmail.com',
            'password' => 'adminpass'
        ]);

        Product::create([
            'name' => 'Product one',
            'content' => 'Hello World'
        ]);
    }
}
