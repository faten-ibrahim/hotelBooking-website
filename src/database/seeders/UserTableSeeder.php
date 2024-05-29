<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();

        // create admin user
        $admin = User::factory()->create([
            'email' => User::ADMIN_EMAIL,
            'password' => \Hash::make('adminPassword@123')
        ]);

        $admin->givePermissionTo(Permission::MANAGE_DASHBOARD);  // Adding permission to a admin

        $admin->assignRole(Role::ADMIN); // Adding a role to admin
    }
}
