<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_user_list_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Joel')
            ->assertSee('Ellie');
    }
    
    /** @test */
    function it_loads_the_user_details_page(){
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalle del usuario: 5');
    }

    /** @test */
    function it_loads_te_new_users_page(){
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear nuevo usuario');
    }

    /** @test */
    function it_loads_mi_ruta(){
        $this->get('/miruta')
        ->assertStatus(200)
        ->assertSee("Hola Mundo");
    }
}
