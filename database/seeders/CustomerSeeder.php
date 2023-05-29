<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Customer;
use App\Models\Intermediair;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $intermediairs = Intermediair::select('id', 'owner_id') ->get()->toArray();

        foreach($intermediairs AS $intermediair) {
            $clients = client::select('id')->where('intermediair_id',  $intermediair['id']) ->get()->toArray();

            foreach($clients AS $client) {
                Customer::factory()->create([
                    'customername' =>  fake()->company() .' (cust)',
                    'intermediair_id' => $intermediair['id'],
                    'client_id' => $client['id'],
                    'owner_id' => $intermediair['owner_id'],

                ]);
            }
        }

    }
}
