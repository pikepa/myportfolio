<?php

use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class AddingPagesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_add_pages()
    {
        $this->withoutExceptionHandling();

        Livewire::test('pages.manage-pages')
            ->set('name', 'About Me')
            ->set('title', 'Hellen Dutch')
            ->set('active', '1')
            ->call('add');

        $this->assertTrue(Page::whereName('About Me')->exists());
    }

    /** @test */
    public function name_is_unique()
    {
        $page = Page::create([
            'name' => 'Albert',
            'slug' => 'albert',
            'title' => 'Fred',
            'owner_id' => 1,
            'active' => 1,
        ]);

        Livewire::test('pages.manage-pages')
            ->set('name', 'Albert')
            ->set('title', 'Hellen Dutch')
            ->set('active', '0')
            ->call('add')
            ->assertHasErrors(['name' => 'unique']);
    }

    /** @test */
    public function see_name_hasnt_already_been_taken_validation_message_as_user_types()
    {
        $page = Page::create([
            'name' => 'Albert',
            'slug' => 'albert',
            'title' => 'Fred',
            'active' => true,
            'owner_id' => 1,
        ]);

        Livewire::test('pages.manage-pages')
            ->set('name', 'Alber')
            ->assertHasNoErrors()
            ->set('name', 'Albert')
            ->assertHasErrors(['name' => 'unique']);
    }

    /** @test */
    public function name_has_min_5_chars()
    {
        Livewire::test('pages.manage-pages')
            ->set('name', 'a')
            ->call('add')
            ->assertHasErrors(['name' => 'min']);
    }

    /** @test */
    public function Active_is_required()
    {
        Livewire::test('pages.manage-pages')
            ->set('active', '')
            ->call('add')
            ->assertHasErrors(['active' => 'required']);
    }

    /** @test */
    public function Active_is_true_or_false()
    {
        Livewire::test('pages.manage-pages')
            ->set('active', 'happy')
            ->call('add')
            ->assertHasErrors(['active' => 'In']);
    }

    /** @test */
    public function name_has_max_24_chars()
    {
        Livewire::test('pages.manage-pages')
            ->set('name', str_repeat('a', 25))
            ->set('title', 'Hellen Dutch')
            ->set('active', 'false')
            ->call('add')
            ->assertHasErrors(['name' => 'max']);
    }

    /** @test */
    public function update_a_page_returns_correct_values()
    {
        $this->signIn();
        $page = Page::factory()->create();

        Livewire::test('pages.manage-pages')
            ->call('edit', $page->id)
            ->set('name', 'AboutMe')
            ->set('title', 'Hellen Dutch')
            ->set('active', '1')
            ->call('update');

        $page = Page::find($page->id);
        $this->assertEquals('AboutMe', $page->name);
        $this->assertEquals('Hellen Dutch', $page->title);
        $this->assertEquals('1', $page->active);
    }
}
