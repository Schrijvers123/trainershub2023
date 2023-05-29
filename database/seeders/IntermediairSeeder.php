<?php

namespace Database\Seeders;

use App\Models\Intermediair;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IntermediairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Create one know intermediair
         */

        Intermediair::factory()->create([
            'companyname' => 'Demo SCHRIJVERS123.NL',
            'ext_debtor_number' => 'DB00001',
            'status_id' => 2,
            'address' => 'Turkooisdreef 21',
            'postcode' => '7828 BJ',
            'city' => 'Emmen',
            'country' => 'NL',
            'owner_id' => 1,
        ]);

        /**
         * Create 4 extra random internmediairs with status 1
         */
        Intermediair::factory(4)->create([
            'owner_id' => 1,
            'status_id' => 2
        ]);

        /**
         * Create 1 extra random internmediairs with status 2
         */
        Intermediair::factory()->create([
            'owner_id' => 1,
            'status_id' => 1
        ]);

        /**
         * Create 1 extra random internmediairs with status 3
         */
        Intermediair::factory()->create([
            'owner_id' => 1,
            'status_id' => 3
        ]);
        /**
         * Create 1 extra random internmediairs with status 4
         */
        Intermediair::factory()->create([
            'owner_id' => 1,
            'status_id' => 4
        ]);
    }
}
