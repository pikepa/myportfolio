<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Paragraph;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageParagraphsTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    function can_add_paragraph()
    {
        Livewire::test('paragraphs.manage-paras')
            ->set('content','this is a paragraph content')
            ->set('select','1')
            ->call('save') ;

            $para= Paragraph::get();
          //  dd($para);
            
        $this->assertTrue(Paragraph::wherePara_content('this is a paragraph content')->exists());

        /** @test */
        function para_content_is_required()
        {
            Livewire::test('paragraphs.manage-paras')
                ->set('para_content', 'a')
                ->set('select','1')
                ->call('save');

                $this->assertHasErrors(['para_content' => 'required']);
        }
    }
}
