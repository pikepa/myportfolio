<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Livewire\Images\LoadImages;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageFileUploadTest extends TestCase
{
    use  RefreshDatabase;

    /** @test */
    function can_upload_image()
    {
        $user = User::factory()->create();

        $file = UploadedFile::fake()->image('test.png');

        Storage::fake('images');

        Livewire::actingAs($user)
            ->test('images.upload')
            ->set('newAvatar', $file)
            ->call('submit');

        $user->refresh();

        $this->assertNotNull($user->avatar);
        Storage::disk('avatars')->assertExists($user->avatar);
    }
}
