<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();
        // User::truncate();
        // Post::truncate();

        $user = User::factory()->create([
            'name' => 'Mark Windler'
        ]);

        Post::factory(1)->create([
            'user_id' => $user->id
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);
        
        // $hobby = Category::create([
        //     'name' => 'Hobby',
        //     'slug' => 'hobby'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobby->id,
        //     'title' => 'My Hobby Post',
        //     'slug' => 'my-hobby-post',
        //     'excerpt' => 'fantastic post about my hobby',
        //     'body' => 'Here is the body as it is in the post'
        // ]);
    }
}
