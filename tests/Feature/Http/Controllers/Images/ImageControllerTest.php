<?php

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;


uses(RefreshDatabase::class);


test('an image can be displayed on its own in a full page', function () {
    $image = ['id' => '39'];

    $response = $this->get('/images/$image->id');

    $response->assertStatus(200);
})->skip();


test('An image can be deleted and removed from s3', function () {
    //expect()->
})->skip();

test('An image can be set as a featured image', function () {

    $this->withoutExceptionHandling();

    $product = Product::factory()->create();

    $this->get('/images/1/39/featured');
    $product->refresh();

    $this->assertDatabaseHas('products', ['featured_img' => '39']);

});


