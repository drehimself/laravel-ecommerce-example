<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Administrator',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Normal User',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'adminweb']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Admin Web',
                ])->save();
        }
    }
}
