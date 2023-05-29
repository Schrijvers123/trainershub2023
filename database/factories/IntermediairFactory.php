<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Intermediair>
 */
class IntermediairFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'companyname' => fake()->company(),
            'ext_debtor_number' => fake()->numerify('DB00###'),
            'status_id' =>fake()->numberBetween(1, 4),
            'address' => fake()->streetAddress(),
            'postcode' => fake()->postcode(),
            'city' => fake()->city(),
            'country' => 'NL',
            'owner_id' => function () {
                return User::factory()->create()->id;
            }
        ];
    }
}
