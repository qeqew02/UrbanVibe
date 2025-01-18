<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = (array)[
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'password',
                'role' => 'admin'
            ],
            [
                'name' => 'pelanggan',
                'email' => 'pelanggan@gmail.com',
                'password' => 'password',
                'role' => 'customer'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

       $this->call([
           CategoriesSeeder::class, 
           ProductsSeeder::class,
       ]);

    }
}
