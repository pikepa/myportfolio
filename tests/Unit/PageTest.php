<?php

namespace Tests\Unit;

use App\Page;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function a_page_has_a_path()
    {
        $this->withoutExceptionHandling();
        $page = factory(Page::class)->create();
        $this->assertEquals('/page/' . $page->id, $page->path());
    }
}
