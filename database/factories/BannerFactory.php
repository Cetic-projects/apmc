<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Banner;

class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'is_active' => $this->faker->boolean(),
            'position' => $this->faker->numberBetween(1,100),
            'nb_shows' => $this->faker->randomDigit(),
            'nb_clics' => $this->faker->randomDigit(),
        ];
    }
}
