<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add fixed Common Status seeders
        Status::factory()->create([
            'id' => 1,
            'title' => 'status.inactive_title',
            'colorclass' => 'inactive',
            'category' => 'common'
        ]);

        Status::factory()->create([
            'id' => 2,
            'title' => 'status.active_title',
            'colorclass' => 'active',
            'category' => 'common'
        ]);

        Status::factory()->create([
            'id' => 3,
            'title' => "status.onhold_title",
            'colorclass' => 'onhold',
            'category' => 'common'
        ]);

        Status::factory()->create([
            'id' => 4,
            'title' => "status.trash_title",
            'colorclass' => 'trash',
            'category' => 'common'
        ]);
    }
}
