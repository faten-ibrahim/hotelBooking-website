<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => Role::ADMIN]);
        Permission::create(['name' => Permission::MANAGE_DASHBOARD, 'guard_name' => 'web']);

        // Lets give all permission to admin role.
        $allPermissionNames = Permission::pluck('name')->toArray();

        $adminRole->givePermissionTo($allPermissionNames);
    }
}
