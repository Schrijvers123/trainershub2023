<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Intermediair;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $intermediair_id = fake()->randomElement(Intermediair::all()->pluck('id') ->toArray());
        $client_id = fake()->randomElement(Client::where('intermediair_id', $intermediair_id)->pluck('id') ->toArray());

        return [
            'customername' => fake()->company(),
            'client_id' => $client_id,
            'owner_id' => 1,
            'intermediair_id' => $intermediair_id,
        ];
    }
}
