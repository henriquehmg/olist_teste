<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TesteApi extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

   public function test_can_create_tipo_produto()
    {
        $faker = \Faker\Factory::create();
        $this->post('/api/tipo_produto', ['nome'=> $faker->name])
            ->assertStatus(201);
    }
    public function test_lista_tipo_produto()
    {
        $response = $this->get('/api/tipo_produto');
        $response->assertStatus(200);
    }
    public function test_get_tipo_produto()
    {
        $response = $this->get('/api/tipo_produto', ['id'=> '1']);
        $response->assertStatus(200);
    }
    public function test_update_tipo_produto()
    {
        $response = $this->put('/api/tipo_produto/1', ['nome'=> 'exemplo']);
        $response->assertStatus(201);
    }
    public function test_delete_tipo_produto()
    {
        $response = $this->delete('/api/tipo_produto/1');
        $response->assertStatus(201);
    }

}
