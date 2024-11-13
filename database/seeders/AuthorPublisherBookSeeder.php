<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\author;
use App\Models\book;
use App\Models\Category;
use App\Models\publisher;



class AuthorPublisherBookSeeder extends Seeder
{
    
    public function run()
    {
        author::factory(100)->create()->each(function ($author) {
        
            $publisher = publisher::factory()->create();

            $author->books()->createMany(
                book::factory(10)->create([
                    'category_id' => Category::inRandomOrder()->first()->id,
                    'publisher_id' => $publisher->id,
                ])->toArray()
            );
        });
    }
}
