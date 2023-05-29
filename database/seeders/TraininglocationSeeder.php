<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Intermediair;
use App\Models\Traininglocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TraininglocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $intermediairs = Intermediair::select('id', 'owner_id') ->get()->toArray();

        foreach($intermediairs AS $intermediair) {
            $customers = customer::select('id')->where('intermediair_id',  $intermediair['id']) ->get()->toArray();

            foreach($customers AS $customer) {
                $city = fake()->city();

                Traininglocation::factory()->create([
                    'locationname' =>  $city .' (trainingloc)',
                    'city' => $city,

                    'intermediair_id' => $intermediair['id'],
                    'customer_id' => $customer['id'],
                    'owner_id' => $intermediair['owner_id'],
                ]);
            }
        }
    }
}
