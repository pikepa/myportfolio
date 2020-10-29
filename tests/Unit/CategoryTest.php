<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_path()
    {
        $category = Category::factory()->create();
        $this->assertEquals('/category/'.$category->id, $category->path());
    }
}
