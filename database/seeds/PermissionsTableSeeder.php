<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [ 'name' => 'list users' ],
            [ 'name' => 'create users' ],
            [ 'name' => 'edit users' ],
            [ 'name' => 'delete users' ],

            [ 'name' => 'list roles' ],
            [ 'name' => 'create roles' ],
            [ 'name' => 'edit roles' ],
            [ 'name' => 'delete roles' ],

            [ 'name' => 'list areas' ],
            [ 'name' => 'create areas' ],
            [ 'name' => 'edit areas' ],
            [ 'name' => 'delete areas' ],
        ];

        $admin = Role::find(1);

        foreach ($permissions as $permission) {
            Permission::create($permission);
            $admin->givePermissionTo($permission);
        }

    }
}
