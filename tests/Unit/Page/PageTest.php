<?php

namespace tests\Unit;

use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use tests\TestCase;

class PageTest extends TestCase
{
    use  RefreshDatabase;

    /** @test */
    public function a_page_has_a_path()
    {
        $this->withoutExceptionHandling();
        $this->signIn();

        $page = Page::factory()->create();

        $this->assertEquals('/page/'.$page->id, $page->path());
    }
}
