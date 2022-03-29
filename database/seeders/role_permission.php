<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class role_permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_permission = config('role_permission');

        foreach ($role_permission as $role_name => $permissions) {
            // Create role if not exist
            $role_model = Role::where('name', $role_name)->firstOrCreate([
                'name'       => $role_name,
                'guard_name' => 'web'
            ]);

            foreach ($permissions as $permission_name) {
                // Create permission if not exist
                Permission::where('name', $permission_name)->firstOrCreate([
                    'name'       => $permission_name,
                    'guard_name' => 'web'
                ]);
            }

            // Sync role with permissions
            $role_model->givePermissionTo($permissions);
        }
    }
}
