<?php

namespace Tests\Feature;

use App\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManageCategoriesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_guest_can_not_create_a_category()
    {
        $response = $this->get('/category/create');
        $response->assertRedirect('/login');
    }

    /** @test */
    public function a_category_can_be_added_to_the_database()
    {
        $category = factory(Category::class)->make();
        $category->save();
        $this->assertDatabaseHas('categories', ['category' => $category['category']]);
    }

    /** @test */
    public function a_guest_can_not_view_the_category_index()
    {
        $category = factory(Category::class)->create();
        $response = $this->get('/category');
        $response->assertRedirect('/login');
    }

    /** @test */
    public function a_SignedIn_user_can_view_the_category_index()
    {
        $this->signIn();
        $category = factory(Category::class)->create();
        $response = $this->get('/category');
        $response->assertStatus(200);
    }
}
