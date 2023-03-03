<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(150),
            'price' => $this->faker->randomDigit(),
            'slug' => $this->faker->slug(),
            'image' => $this->faker->imageUrl(360, 360, 'menu', true, 'plat'),
            'tags' => $this->faker->text(40),
        ];
    }
}
