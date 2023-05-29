<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit clients']);
        Permission::create(['name' => 'delete clients']);
        Permission::create(['name' => 'publish clients']);
        Permission::create(['name' => 'unpublish clients']);

        Permission::create(['name' => 'edit accountmanagers']);
        Permission::create(['name' => 'delete accountmanagers']);
        Permission::create(['name' => 'publish accountmanagers']);
        Permission::create(['name' => 'unpublish accountmanagers']);

        Permission::create(['name' => 'edit customers']);
        Permission::create(['name' => 'delete customers']);
        Permission::create(['name' => 'publish customers']);
        Permission::create(['name' => 'unpublish customers']);

        Permission::create(['name' => 'edit trainings']);
        Permission::create(['name' => 'delete trainings']);
        Permission::create(['name' => 'publish trainings']);
        Permission::create(['name' => 'unpublish trainings']);

        Permission::create(['name' => 'manage intermediairs']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'accountmanager']);
        $role1->givePermissionTo('edit clients');
        $role1->givePermissionTo('publish clients');
        $role1->givePermissionTo('unpublish clients');

        $role2 = Role::create(['name' => 'trainer']);
        $role2->givePermissionTo('edit clients');
        $role2->givePermissionTo('publish clients');
        $role2->givePermissionTo('unpublish clients');

        $role3 = Role::create(['name' => 'super user']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        $role4 = Role::create(['name' => 'admin']);
        $role4->givePermissionTo('manage intermediairs');


        // create a super user
        $user = User::factory()->create([
            'name' => 'Arjen Schrijvers',
            'email' => 'arjen@schrijvers123.nl',
            'password' => Hash::make('Friday13_11'),
        ]);
        $user->assignRole($role3);

        // create a trainer
        $user = User::factory()->create([
            'name' => 'Trainer 1',
            'email' => 'tr1@schrijvers123.nl',
            'password' => Hash::make('Friday13_11'),
        ]);
        $user->assignRole($role1);

        // create two intermediair
        $user = User::factory()->create([
            'name' => 'Account Manager 1',
            'email' => 'am1@schrijvers123.nl',
            'password' => Hash::make('Friday13_11'),
        ]);
        $user->assignRole($role2);

        $user = User::factory()->create([
            'name' => 'Account Manager 2',
            'email' => 'am2@schrijvers123.nl',
            'password' => Hash::make('Friday13_11'),
        ]);
        $user->assignRole($role2);



    }
}
