<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Customer;
use App\Models\Intermediair;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Traininglocation>
 */
class TraininglocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $intermediair_id = fake()->randomElement(Intermediair::all()->pluck('id') ->toArray());
        $customer_id = fake()->randomElement(Customer::where('intermediair_id', $intermediair_id)->pluck('id') ->toArray());

        return [
            'locationname' => fake()->company(),

            'address' => fake()->streetAddress(),
            'postcode' => fake()->postcode(),
            'city' => fake()->city(),
            'country' => 'NLD',

            'customer_id' => $customer_id,
            'owner_id' => 1,
        ];
    }
}
