<?php

namespace Tests\Feature;

use App\Models\Paragraph;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ManageParagraphsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_add_paragraph()
    {
        Livewire::test('paragraphs.manage-paras')
            ->set('content', 'this is a paragraph content')
            ->set('select', '1')
            ->call('save');

        $para = Paragraph::get();
        //  dd($para);

        $this->assertTrue(Paragraph::wherePara_content('this is a paragraph content')->exists());

        /** @test */
        function para_content_is_required()
        {
            Livewire::test('paragraphs.manage-paras')
                ->set('para_content', 'a')
                ->set('select', '1')
                ->call('save');

            $this->assertHasErrors(['para_content' => 'required']);
        }
    }
}
