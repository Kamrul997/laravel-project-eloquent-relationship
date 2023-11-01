<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category as Category;
use App\Models\Comment as Comment;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryFaker = Faker::create();

        for($i=1; $i<5; $i++){
            $categoryData = new Category;
            $categoryData->name = 'Category-'.$i;
            $categoryData->category_details = $categoryFaker->text();
            $categoryData->save();
        }

        for($i=1; $i<5; $i++){
            $categoryData = new Comment;
            $categoryData->commentator_name = $categoryFaker->name;
            $categoryData->comment = $categoryFaker->text();
            $categoryData->post_id = rand(1,10);
            $categoryData->save();
        }

        for($i=1; $i<50; $i++){
            $categoryData = new Comment;
            $categoryData->commentator_name = $categoryFaker->name;
            $categoryData->comment = $categoryFaker->text();
            $categoryData->post_id = rand(1,10);
            $categoryData->save();
        }
    }
}
