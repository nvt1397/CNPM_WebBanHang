<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin_role = new Role();
        $super_admin_role->name = 'super admin';
        $super_admin_role->save();

        $admin_role = new Role();
        $admin_role->name = 'admin';
        $admin_role->save();

        $user_role = new Role();
        $user_role->name = 'user';
        $user_role->save();
    }
}
