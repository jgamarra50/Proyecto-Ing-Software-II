<?php

namespace Tests\Feature;

use Tests\TestCase;

class ArticulosDetallePagesTest extends TestCase
{
    public function test_detalle_eco_moto_standard_is_accessible(): void
    {
        $response = $this->get('/articulos/eco-moto-standard');
        $response->assertStatus(200);
    }

    public function test_detalle_eco_moto_pro_is_accessible(): void
    {
        $response = $this->get('/articulos/eco-moto-pro');
        $response->assertStatus(200);
    }

    public function test_detalle_eco_scoot_max_is_accessible(): void
    {
        $response = $this->get('/articulos/eco-scoot-max');
        $response->assertStatus(200);
    }

    public function test_detalle_eco_scoot_lite_is_accessible(): void
    {
        $response = $this->get('/articulos/eco-scoot-lite');
        $response->assertStatus(200);
    }

    public function test_detalle_ecobike_one_is_accessible(): void
    {
        $response = $this->get('/articulos/ecobike-one');
        $response->assertStatus(200);
    }
}