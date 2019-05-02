<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for test
        $super_admin = new User();
        $super_admin->name = 'Super Admin';
        $super_admin->email = 'superadmin@gmail.com';
        $super_admin->password = bcrypt('superadmin');
        $super_admin->avatar_link = 'img/login.jpg'; 
        $super_admin->role_id = 1;
        $super_admin->save();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->avatar_link = 'img/login.jpg';
        $admin->password = bcrypt('admin');
        $admin->role_id = 2;
        $admin->save();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->avatar_link = 'img/login.jpg';
        $user->password = bcrypt('user');
        $user->role_id = 3;
        $admin->save();
    }
}
