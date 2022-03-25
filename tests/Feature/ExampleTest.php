<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function rota_home_retorna_sucesso()
        {
            $response = $this->get('/home');

            $response->assertStatus(200);
        }

    public function a_rota_produtos_retorna_com_sucesso()
        {
            $response = $this->get('/produtos');

            $response->assertStatus(200);
        }
    }