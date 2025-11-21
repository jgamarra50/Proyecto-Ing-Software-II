<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $admin = User::updateOrCreate(
            ['email' => 'admin@ecoflow.local'],
            [
                'name' => 'Administrador',
                'password' => bcrypt('admin1234'),
                'role' => 'admin',
            ]
        );

        $admin->syncRoles([$adminRole]);
    }
}
