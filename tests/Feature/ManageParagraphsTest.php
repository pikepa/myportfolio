<?php

namespace Tests\Feature;

use App\Models\Page;
use Tests\TestCase;
use Livewire\Livewire;
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

    }
}
