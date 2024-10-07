<?php

namespace Database\Factories;

use App\Models\EmailSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmailSetting>
 */
class EmailSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmailSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mail_mailer' => $this->faker->word,
            'mail_host' => $this->faker->domainName,
            'mail_port' => $this->faker->randomNumber(3),
            'mail_username' => $this->faker->userName,
            'mail_password' => $this->faker->password,
            'mail_encryption' => $this->faker->randomElement(['ssl', 'tls']),
            'mail_from_address' => $this->faker->safeEmail,
            // 'mail_from_name' => $this->faker->name,
            'status' => $this->faker->boolean,
        ];
    }
}
