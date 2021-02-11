<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TesteProdutos_test extends TestCase
{
    public function test_can_create_produto()
    {
        $faker = \Faker\Factory::create();
        $this->post('/api/produto', ['nome'=> $faker->name, 'tipo'=>'1'])
            ->assertStatus(201);
    }
    public function test_lista_produto()
    {
        $response = $this->get('/api/produto');
        $response->assertStatus(200);
    }
    public function test_get_produto()
    {
        $response = $this->get('/api/produto/1');
        $response->assertStatus(200);
    }
    public function test_update_produto()
    {
        $response = $this->put('/api/produto/1', ['nome'=> 'exemplo']);
        $response->assertStatus(201);
    }
    public function test_delete_produto()
    {
        $response = $this->delete('/api/produto/1');
        $response->assertStatus(201);
    }
}
