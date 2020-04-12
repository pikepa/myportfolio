<?php

namespace Tests\Feature;

use App\Message;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManageMessageTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_guest_can_create_a_message()
    {
        $response = $this->get('/message/create')
            ->assertStatus(200)
            ->assertSee('Message');
    }

    /** @test */
    public function a_message_is_added_to_the_database()
    {
        $message = factory(Message::class)->create();

        $this->assertDatabaseHas('messages', ['subject' => $message->subject]);
    }

    /** @test */
    public function a_guest_can_not_view_the_message_index()
    {
        $message = factory(Message::class)->create();
        $response = $this->get('/message');
        $response->assertRedirect('/login');
    }

    /** @test */
    public function a_signed_in_user_can_view_messages()
    {
        $this->signIn();
        $message = factory(Message::class)->create();
        $response = $this->get('/message');
        $response->assertStatus(200);
    }
}
