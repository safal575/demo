<?php

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //created factory and assigned fake data from faker class into the database.
        Post::factory(10)->create();

    //    $user = User::factory()->create();    

    // Manual way of inserting data into the database without factory model
    //    $personal = Category::create([
    //        'name' => 'Personal',
    //        'slug' => 'personal'
    //    ]);


    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' => $personal->id,
    //         'title' => 'My Personal Post',
    //         'slug' => 'my-personal-post',
    //         'excerpt' => 'This is the excerpt part of the personal post.',
    //         'body' => 'I am very excited about the blog posts generating using laravel and this is my first project.'

    //     ]);
    }
}