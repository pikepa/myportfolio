<?php

namespace Tests\Feature;

use Tests\TestCase;
use Facades\Tests\Setup\TestimonialFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTests extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    /** @test */
    function the_static_pages_are_loaded_when_guest_clicks_menu_link()
    {
        $response=$this->get('/aboutme');
        $response->assertStatus(200);
        $response->assertSee('Pippa');

        $response=$this->get('/program/how_it_works');
        $response->assertStatus(200);
        $response->assertSee('How it Works');

        $response=$this->get('/program/nutrition');
        $response->assertStatus(200);
        $response->assertSee('Nutrition');

        $response=$this->get('/program/motivation');
        $response->assertStatus(200);
        $response->assertSee('Motivation');

        $response=$this->get('/program/community');
        $response->assertStatus(200);
        $response->assertSee('Community');

    }
}
