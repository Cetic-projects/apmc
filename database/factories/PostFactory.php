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
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomDigit(),
            'is_featured' => $this->faker->boolean(),
            'is_negociable' => $this->faker->boolean(),
            'export_price' => $this->faker->randomDigit(),
            'promotional_price' => $this->faker->randomDigit(),
            'begin_promotional_date' => $this->faker->date(),
            'end_promotional_date' => $this->faker->date(),
            'slug' => $this->faker->slug(),
            'nb_stars' => $this->faker->randomDigit(0,5),
            'video_url' => $this->faker->url(),
            'tags' => $this->faker->text(),
        ];
    }
}
