<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_see_livewire_profile_component_on_profile_page()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
                ->get('/profile')
                ->assertSuccessful()
                ->assertSeeLivewire('user.profile');
    }

    /** @test */
    public function profile_info_is_pre_populated()
    {
        $user = factory(User::class)->create([
            'name' => 'foo',
            'about' => 'bar',
        ]);

        Livewire::actingAs($user)
                ->test('user.profile')
                ->assertSet('name', 'foo')
                ->assertSet('about', 'bar');
    }

    /** @test */
    public function message_is_shown_on_save()
    {
        $user = factory(User::class)->create([
            'name' => 'foo',
            'about' => 'bar',
        ]);

        Livewire::actingAs($user)
                ->test('user.profile')
                ->call('save')
                ->assertEmitted('notify-saved');
    }

    /** @test */
    public function can_update_profile_page()
    {
        $user = factory(User::class)->create();
        Livewire::actingAs($user)
            ->test('user.profile')
            ->set('name', 'foo')
            ->set('about', 'bar')
            ->call('save');

        $user->refresh();

        $this->assertEquals('foo', $user->name);
        $this->assertEquals('bar', $user->about);
    }

    /** @test */
    public function username_must_less_than_24_characters()
    {
        $user = factory(User::class)->create();

        Livewire::actingAs($user)
                ->test('user.profile')
                ->set('name', str_repeat('a', 25))
                ->set('about', 'bar')
                ->call('save')
                ->assertHasErrors(['name' => 'max']);
    }

    /** @test */
    public function about_must_less_than_140_characters()
    {
        $user = factory(User::class)->create();

        Livewire::actingAs($user)
                ->test('user.profile')
                ->set('name', 'foo')
                ->set('about', str_repeat('a', 141))
                ->call('save')
                ->assertHasErrors(['about' => 'max']);
    }
}
