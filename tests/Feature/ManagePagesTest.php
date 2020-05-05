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
    public function a_guest_can_view_a_page()
    {
        $page = factory(Page::class)->create([
            'title'=>'The Artist',
        ]);

        $response = $this->get(route('page.show', ['id' => $page]))
            ->assertStatus(200)
            ->assertViewIs('pages.show')
            ->assertSee($page->title);
    }

    /** @test */
    public function a_guest_can_not_view_the_page_index()
    {
        $response = $this->get(route('page.index'))
            ->assertRedirect('/login');
    }

    /** @test */
    public function a_user_can_view_the_page_index()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $page = factory(Page::class, 5)->create();

        $response = $this->get(route('page.index'))
            ->assertStatus(200)
            ->assertViewIs('pages.index')
            ->assertSee('Pages Admin');
    }

    /** @test */
    public function a_user_can_store_a_page()
    {
        $this->withoutExceptionHandling();

        $this->signIn();

        $page = factory(Page::class)->make([
            'title' => 'The Artist',
        ]);

        $response = $this->post(route('page.store', [
            'title' => $page->title,
            'main_content' => $page->main_content,
            'bottom_content' => $page->bottom_content,
        ]))
            ->assertRedirect(route('root'));

        $this->assertDatabaseHas('pages', [
            'title' => $page->title,
            'main_content' => $page->main_content,
        ]);
    }
}
