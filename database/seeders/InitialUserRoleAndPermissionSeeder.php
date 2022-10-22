<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class InitialUserRoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        // create permissions
        Permission::create(['name' => 'list-user']);
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'read-user']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'delete-user']);

        // create roles and assign created permissions
        $roleSuper = Role::create(['name' => 'Super Admin']);
        /**
         * we disable this and use Gate::before() in AuthServiceProvider
         * to give Super Admin default all permissions
         */
        //$roleSuper->givePermissionTo(Permission::all());

        // create users and assign created roles
        $superAdmin = User::firstOrCreate([
            'name' => 'SuperAdmin',
            'email' => 'technical@sekolah.io',
            'password' => Hash::make('sioSuperSecret_2022'),
            'email_verified_at' => now(),
        ]);
        $superAdmin->assignRole('Super Admin');

    }
}
