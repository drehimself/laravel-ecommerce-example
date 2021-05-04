<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class PermissionRoleTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'adminweb')->firstOrFail();

        $permissions = Permission::all();
        $permissionsFiltered = $permissions->filter(function ($permission, $key) {
            return !in_array($permission->key, [
                'browse_database',
                'browse_media',
                'browse_compass',
                'delete_menus',
                'delete_pages',
                'browse_roles',
                'read_roles',
                'edit_roles',
                'add_roles',
                'delete_roles',
                'browse_users',
                'edit_users',
                'add_users',
                'delete_users',
                'delete_posts',
                'delete_categories',
                'delete_settings',
                'delete_products',
                'delete_products',
                'delete_coupons',
                'delete_category',
                'delete_category-product',
            ]);
        });

        $role->permissions()->sync(
            $permissionsFiltered->pluck('id')->all()
        );
    }
}
