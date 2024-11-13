<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\publisher;


class PublisherFactory extends Factory
{
    protected $model = publisher::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company,
            'address' => $this->faker->address,
        ];
    }
}
