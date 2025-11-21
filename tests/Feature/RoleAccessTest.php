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
        $admin->assignRole('admin');
        $response = $this->actingAs($admin)->get('/gestionar-vehiculos');
        $response->assertStatus(200);
    }

    // Removed repartidor role tests per requirement: only 'cliente' and 'admin' remain.

    public function test_guest_redirected_from_protected_routes(): void
    {
        $response = $this->get('/gestionar-vehiculos');
        $response->assertRedirect('/login');
    }
}