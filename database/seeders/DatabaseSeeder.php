<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\job;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
     public function run(): void
    {
         // This is manuao fake data creation using the factory call. this is a call to  all factories where the datatbase seeder can populate the tables bases on their structure
        //  User::factory(25)->create();
        //  job::factory(25)->create();
        //  Employer::factory(25)->create();
        //  Post::factory(25)->create();
        //  Tag::factory(25)->create();
        //  Comment::factory(25)->create();
 
        //  calling the seeder classes too fill the respective tables
         $this->call([
             UserSeeder::class,
             jobSeeder::class,
             EmployerdSeeder::class,
             PostSeeder::class,
             TagSeeder::class,
             CommentSeeder::class,
         ]);
 
         // User::factory()->create([
         //     'first_name' => 'Test',
         //     'last_name' => 'User',
         //     'email' => 'test@example.com',
         // ]);
    }
}