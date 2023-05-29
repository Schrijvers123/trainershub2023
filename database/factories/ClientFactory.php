<?php

namespace Database\Factories;

use App\Models\Intermediair;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $intermediair_id = fake()->randomElement(Intermediair::all()->pluck('id') ->toArray());

        return [
            'clientname' => fake()->company() . ' (client)',
            'owner_id' => 1,
            'intermediair_id' => $intermediair_id,
        ];
    }
}
