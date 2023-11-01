<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post as Post;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postFaker = Faker::create();

        for($i=0; $i<10; $i++){
            $postData = new Post;
            $postData->post_title = $postFaker->name;
            $postData->post_details = $postFaker->text();
            $postData->save();
        }
    }
}
