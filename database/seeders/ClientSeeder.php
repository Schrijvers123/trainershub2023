<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Intermediair;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $intermediairs = Intermediair::select('id', 'owner_id') ->get()->toArray();
        foreach($intermediairs AS $intermediair) {

            Client::factory()->create([
                'clientname' => 'Own',
                'owner_id' => $intermediair['owner_id'],
                'intermediair_id' => $intermediair['id'],
            ]);
        }

        Client::factory(10)->create();
    }
}
