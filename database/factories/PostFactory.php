<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tema' => 'tecnologia',
            'title' => $this->faker->name(),
            'description' => $this->faker->text(100),
            'body_content' => $this->faker->text(500),
            'image_path' => $this->faker->imageUrl(640, 480),
            'user_id' => 1
        ];
    }
}
