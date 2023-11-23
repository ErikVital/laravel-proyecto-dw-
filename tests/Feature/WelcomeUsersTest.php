<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /**@test*/
    function it_welcomes_users_with_nickname(){
        $this->get('/saludo/pepito/grillo')
        ->assertStatus(200)
        ->assertSee('Bienvenido Pepito, tu apodo es grillo');
    }

    /** @test */
    function it_welcomes_users_without_nickname(){
        $this->get('/saludo/pepito')
        ->assertStatus(200)
        ->assertSee('Bienvenido Pepito');
    }
}
