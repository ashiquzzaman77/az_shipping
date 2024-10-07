<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $parent_id = Category::all()->isEmpty() ? null : Category::all()->random()->id;

        return [
            'name' => $this->faker->unique()->words(rand(1, 3), true),
            'parent_id' => $parent_id,
            'status' => $this->faker->boolean,
        ];
    }
}
