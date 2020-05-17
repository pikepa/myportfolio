<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageParagraphsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function page_management_contains_livewire_componet()
    {
        $this->get('/paras')->assertSeeLivewire('paragraphs.manage-paras');
    }

    /** @test */
    function can_add_paragraph()
    {
        Livewire::test('pages.manage-pages')
            ->set('pageId', 1)
            ->set('paraorder', 1)
            ->set('active', 'false')
            ->call('add');

        $this->assertTrue(Page::whereName('About Me')->exists());
    }
}
