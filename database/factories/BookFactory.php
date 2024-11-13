<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\book;
use App\Models\author;
use App\Models\Category;
use App\Models\publisher;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'author_id' => author::factory(),
            'category_id' => Category::factory(),
            'publisher_id' => publisher::factory(),
            'published_year' => $this->faker->year
        ];
    }
}
