<?php

use App\Models\Product;

use function PHPUnit\Framework\assertSame;

it('has a path', function () {

    $product = Product::factory()->create();

    $this->assertEquals('/product/'.$product->id, $product->path());

});

test('a Product has an Owner', function () {

    $product = Product::factory()->create();

    $this->assertEquals('1', $product->owner_id);

});

test('the published date is correctly formatted', function () {
    $product = Product::factory(['publish_at' => '2022-05-12'])->make();

    assertSame('May 12, 2022', $product->published_date);

});

test('the discounted price is calculated and formatted correctly', function () {
    
    $product = Product::factory([
        'price' => '10000',
        'discount' => '20',])
        ->make();

        $this->assertEquals( '80.00', $product->discounted_price);
});


