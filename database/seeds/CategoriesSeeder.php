<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Celana',
                'photo' => 'storage/product/celana-pendek-gunung.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kemeja',
                'photo' => 'storage/product/kemeja-motif.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jaket',
                'photo' => 'storage/product/jacket-racing.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jeans',
                'photo' => 'storage/product/jeans-blackripped.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
