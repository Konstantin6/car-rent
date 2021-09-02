<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Rubric;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* \App\Models\User::factory(10)->create();
        $this->call([
            AuthorSeeder::class
        ]);
     $this->call([
           RubricSeeder::class
        ]);
*/
       $this->call([
           ArticleSeeder::class
        ]);/*
         $this->call([
            TagSeeder::class
         ]);
         $this->call([
            CommentSeeder::class
         ]);*/
    }
}
