<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ManageUserDetailsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_default_user_can_see_their_profile_page()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $this->actingAs($user);

        $response = $this->get('/profile/'.$user->id)->assertStatus(200)
            ->assertSee($user->name);
    }

    /** @test */
    public function a_guest_cannot_see_a_profile_page()
    {
        $user = factory(User::class)->create();

        $response = $this->get('/profile/'.$user->id)->assertRedirect('/login');
    }

    /** @test */
    public function a_logged_in_user_cannot_see_another_users_profile_page()
    {
        $user = factory(User::class)->create();
        $user2 = factory(User::class)->create();

        $this->actingAs($user);

        $response = $this->get('/profile/'.$user2->id)->assertStatus(403);
    }
}
