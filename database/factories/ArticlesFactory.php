<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Articles>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            
            'summary' => $this->faker->text(150),
            'author_id' => \App\Models\User::factory(),
            'publication_date' => $this->faker->dateTime(),
            'featured_image' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['draft', 'published', 'archived']),
            'views' => $this->faker->numberBetween(0, 5000),
            'likes' => $this->faker->numberBetween(0, 1000),
            'source_url' => $this->faker->url(),
            'source_adress' => $this->faker->url(),
        ];
    }
}
