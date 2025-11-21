<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@ecoflow.local'],
            ['name' => 'Administrador', 'role' => 'admin', 'password' => bcrypt('admin1234')]
        );

        User::updateOrCreate(
            ['email' => 'repartidor@ecoflow.local'],
            ['name' => 'Repartidor', 'role' => 'repartidor', 'password' => bcrypt('repartidor1234')]
        );

        User::updateOrCreate(
            ['email' => 'cliente@ecoflow.local'],
            ['name' => 'Cliente', 'role' => 'cliente', 'password' => bcrypt('cliente1234')]
        );
    }
}
