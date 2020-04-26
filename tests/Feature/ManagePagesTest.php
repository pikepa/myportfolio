<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManagePagesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_user_can_create_a_page()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $response = $this->get('/page/create')
            ->assertStatus(200)
            ->assertSee('Hellen Dutch');
    }

    /** @test */
    public function a_guest_can_not_create_a_page()
    {
        $response = $this->get('/page/create')
            ->assertRedirect('/login');
    }

    /** @test */
    public function a_user_can_save_a_page()
    {
        $response = $this->get('/page/create')
            ->assertRedirect('/login');
    }
}
