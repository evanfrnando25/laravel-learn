<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();


        //INI CARA CEPET MENGGUNAKAN FAKER 
        //ini kita menggenerate 5 data dari faker secara random
        User::factory(5)->create() //setelah itu jalankan php artisan db:seed


        //DIBAWAH CARA MANUAL

        // //membuat post
        // Post::create([
        //     'name' => "Evan Fernando",
        //     'email' => 'sandhika',
        // ]);

        //membuat category
        //  Category::create([
        //     'name' => "Evan Fernando",
        //     'email' => 'sandhika',
        //  ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
