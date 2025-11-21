<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $userRole = Role::firstOrCreate([
            'name' => 'user',
            'guard_name' => 'web',
        ]);

        $user = User::updateOrCreate(
            ['email' => 'cliente@ecoflow.local'],
            [
                'name' => 'Cliente',
                'password' => bcrypt('cliente1234'),
                'role' => 'user',
            ]
        );

        $user->syncRoles([$userRole]);
    }
}
