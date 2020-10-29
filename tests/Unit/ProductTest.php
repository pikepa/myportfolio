<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use  RefreshDatabase;

    /** @test */
    public function it_has_a_path()
    {
    //    $this->withoutExceptionHandling();
        $product = Product::factory()->create();
        $this->assertEquals('/product/'.$product->id, $product->path());
    }

    /** @test */
    public function a_product_belongs_to_an_owner()
    {
        $product =Product::factory()->create();
        $user = User::find($product->owner_id);
        $this->assertInstanceOf(User::class, $user);
    }
}
