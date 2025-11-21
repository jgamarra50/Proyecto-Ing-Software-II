<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleAccessTest extends TestCase
{
    use RefreshDatabase;
    public function test_admin_can_access_admin_routes(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $response = $this->actingAs($admin)->get('/gestionar-vehiculos');
        $response->assertStatus(200);
    }

    public function test_repartidor_cannot_access_admin_routes(): void
    {
        $user = User::factory()->create(['role' => 'repartidor']);
        $response = $this->actingAs($user)->get('/gestionar-vehiculos');
        $response->assertRedirect('/login');
    }

    public function test_repartidor_can_access_repartidor_routes(): void
    {
        $user = User::factory()->create(['role' => 'repartidor']);
        $response = $this->actingAs($user)->get('/registrar-entrega-vehiculo');
        $response->assertStatus(200);
    }

    public function test_guest_redirected_from_protected_routes(): void
    {
        $response = $this->get('/gestionar-vehiculos');
        $response->assertRedirect('/login');
    }
}