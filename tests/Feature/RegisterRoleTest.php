<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_as_admin_assigns_admin_role(): void
    {
        $response = $this->post('/register', [
            'name' => 'Nuevo Admin',
            'email' => 'nuevoadmin@example.com',
            'password' => 'Password1',
            'password_confirmation' => 'Password1',
            'role' => 'admin',
        ]);

        $response->assertRedirect('/login');
        $this->assertDatabaseHas('users', [
            'email' => 'nuevoadmin@example.com',
            'role' => 'admin',
        ]);
    }


    public function test_register_as_cliente_assigns_cliente_role(): void
    {
        $response = $this->post('/register', [
            'name' => 'Nuevo Cliente',
            'email' => 'nuevocliente@example.com',
            'password' => 'Password1',
            'password_confirmation' => 'Password1',
            'role' => 'cliente',
        ]);

        $response->assertRedirect('/login');
        $this->assertDatabaseHas('users', [
            'email' => 'nuevocliente@example.com',
            'role' => 'cliente',
        ]);
    }
}