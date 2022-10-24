<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class TripModuleRoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /************************************
         * TripGroup
         ************************************/

        // create TripGroup permissions
        $tripGroupListPermission = Permission::create(['name' => 'list-tripgroup']);
        $tripGroupCreatePermission = Permission::create(['name' => 'create-tripgroup']);
        $tripGroupReadPermission = Permission::create(['name' => 'read-tripgroup']);
        $tripGroupUpdatePermission = Permission::create(['name' => 'update-tripgroup']);
        $tripGroupDeletePermission = Permission::create(['name' => 'delete-tripgroup']);

        // create TripGroup Admin roles and assign created permissions
        $roleTripGroupAdmin = Role::create(['name' => 'TripGroup Admin']);
        $roleTripGroupAdmin->givePermissionTo($tripGroupListPermission);
        $roleTripGroupAdmin->givePermissionTo($tripGroupCreatePermission);
        $roleTripGroupAdmin->givePermissionTo($tripGroupReadPermission);
        $roleTripGroupAdmin->givePermissionTo($tripGroupUpdatePermission);
        $roleTripGroupAdmin->givePermissionTo($tripGroupDeletePermission);

        // create TripGroup Manager roles and assign created permissions
        $roleTripGroupManager = Role::create(['name' => 'TripGroup Manager']);
        $roleTripGroupManager->givePermissionTo($tripGroupListPermission);
        $roleTripGroupManager->givePermissionTo($tripGroupCreatePermission);
        $roleTripGroupManager->givePermissionTo($tripGroupReadPermission);
        $roleTripGroupManager->givePermissionTo($tripGroupUpdatePermission);


        /************************************
         * Trip
         ************************************/

        // create Trip permissions
        $tripListPermission = Permission::create(['name' => 'list-trip']);
        $tripCreatePermission = Permission::create(['name' => 'create-trip']);
        $tripReadPermission = Permission::create(['name' => 'read-trip']);
        $tripUpdatePermission = Permission::create(['name' => 'update-trip']);
        $tripDeletePermission = Permission::create(['name' => 'delete-trip']);

        // create Trip Admin roles and assign created permissions
        $roleTripAdmin = Role::create(['name' => 'Trip Admin']);
        $roleTripAdmin->givePermissionTo($tripListPermission);
        $roleTripAdmin->givePermissionTo($tripCreatePermission);
        $roleTripAdmin->givePermissionTo($tripReadPermission);
        $roleTripAdmin->givePermissionTo($tripUpdatePermission);
        $roleTripAdmin->givePermissionTo($tripDeletePermission);

        // create Trip Manager roles and assign created permissions
        $roleTripManager = Role::create(['name' => 'Trip Manager']);
        $roleTripManager->givePermissionTo($tripListPermission);
        $roleTripManager->givePermissionTo($tripCreatePermission);
        $roleTripManager->givePermissionTo($tripReadPermission);
        $roleTripManager->givePermissionTo($tripUpdatePermission);
    }
}
