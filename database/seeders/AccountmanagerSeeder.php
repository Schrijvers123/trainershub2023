<?php

namespace Database\Seeders;

use App\Models\Accountmanager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountmanagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Create one know Accountmanger and connect it the know company
         */
        Accountmanager::factory()->create([
            'phone' => '+31628022567',
            'user_id' => 1,
            'intermediair_id' => 1,
            'status_id' => 2,
        ]);

        Accountmanager::factory(10)->create();
    }
}
