<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        Post::factory(5)->create();

        
        // $user = User::factory()->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $personal = Category::create([
        //     'name' => 'personal',
        //     'slug' => 'personal'
        // ]);
        // $work = Category::create([
        //     'name' => 'work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'michael',
        //     'slug' => 'michael',
        //     'excerpt' => 'michael na sabinus',
        //     'body' => 'he loves messi soo much'

        // ]);

    }
}
