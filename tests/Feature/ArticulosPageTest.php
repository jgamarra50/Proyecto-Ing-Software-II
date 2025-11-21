<?php

namespace Tests\Feature;

use Tests\TestCase;

class ArticulosPageTest extends TestCase
{
    public function test_articulos_page_is_accessible(): void
    {
        $response = $this->get('/articulos');

        $response->assertStatus(200);
    }
}