<?php

namespace Database\Factories;

use App\Models\ActivityLog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActivityLog>
 */
class ActivityLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ActivityLog::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjectType = 'App\\Models\\' . ucfirst($this->faker->word);
        $userType = 'App\\Models\\' . ucfirst($this->faker->word);

        return [
            'description' => $this->faker->sentence,
            'subject_type' => $subjectType,
            'subject_id' => $this->faker->randomNumber(),
            'user_type' => $userType,
            'user_id' => $this->faker->randomNumber(),
        ];
    }
}
