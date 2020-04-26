<?php

namespace Tests\Feature;

use App\Page;
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

        $response = $this->get(route('page.create'))
            ->assertStatus(200)
            ->assertViewIs('pages.create')
            ->assertSee('New Page');
    }

    /** @test */
    public function a_guest_can_not_create_a_page()
    {
        $response = $this->get(route('page.create'))
            ->assertRedirect('/login');
    }

    /** @test */
    public function a_guest_can_show_a_page()
    {
        $page = factory(Page::class)->create([
            'title'=>'The Artist',
        ]);

        $response = $this->get(route('page.show', ['id' => $page]))
            ->assertStatus(200)
            ->assertViewIs('pages.show')
            ->assertSee($page->title);
    }
}
