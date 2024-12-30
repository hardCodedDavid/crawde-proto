<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ensure roles are created under the 'admin' guard
        Role::firstOrCreate(['name' => 'super-admin', 'guard_name' => 'admin']);
        Role::firstOrCreate(['name' => 'manager', 'guard_name' => 'admin']);
        Role::firstOrCreate(['name' => 'editor', 'guard_name' => 'admin']);

        // Create an admin user
        $admin = Admin::firstOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('password123'),
        ]);

        // Assign the 'super-admin' role to the admin user
        if (!$admin->hasRole('super-admin')) {
            $admin->assignRole('super-admin');
        }
    }
}
