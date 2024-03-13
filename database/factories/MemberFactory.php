<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile_pic' => $this->faker->imageUrl(),
            'name'=> $this->faker->name(),
            'pressure' => $this->faker->randomElement(['low','normal','high']),
            'temperature' => $this->faker->randomElement(['extra_cold','cold','normal','hot','extra_hot','custom']),
            'timer' => $this->faker->time(),
            'created_at' => now(),
            'update_at' => now(),

        ];
    }
}
