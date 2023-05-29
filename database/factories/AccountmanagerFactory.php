<?php

namespace Database\Factories;

use App\Models\Intermediair;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accountmanager>
 */
class AccountmanagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $intermediair_id = fake()->randomElement(Intermediair::all()->pluck('id') ->toArray());
        $status_id = fake()->randomElement(Status::all()->pluck('id') ->toArray());
        $user = User::factory()->create();
        $user->assignRole('accountmanager');

        return [
            'phone' => fake()->phoneNumber(),
            'user_id' => $user->id,
            'intermediair_id' => $intermediair_id,
            'status_id' => $status_id,
        ];
    }
}
