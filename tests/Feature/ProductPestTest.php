<?php

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a guest can vist a product detail page', function () {
    $product = Product::factory()->create(['title' => 'my Title']);

    $response = $this->get(route('product.show', '1'));

    $response->assertStatus(200)
             ->assertSee('my Title');
});

test('guests cannot create a product', function () {
    $response = $this->get(route('product.create'));

    $response->assertRedirect('/login');

    $this->assertCount(0, Product::all());
});

test('guests cannot edit a product', function () {
    $product = Product::factory()->create();

    $response = $this->get('/product/1/edit');

    $response->assertRedirect('/login');
});

test('a logged in user can edit a product', function () {
    $user = User::factory()->create();
    $product = Product::factory()->create();

    $response = $this->actingAs($user)->get('/product/1/edit');

    $response->assertSee($product->title)->assertSee('Update');
});

test('logged in users can view the create product page', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('product.create'));

    $response->assertSuccessful();
    $response->assertSee('New Product')->assertSee('Save');
});

test('logged in users can create a product', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)
        ->followingRedirects()
        ->post(route('product.store'), [
            'title'         => 'My Title',
            'description'   => 'This is a description',
            'medium'        => 'Oil on Canvas',
            'size'          => "4' x 4'",
            'status'        => 'For Sale',
            'price'         => '12300',
            'discount'      => 'Yes',
            'owner_id'      => User::factory()->create()->id,
            'likes'         => '10',
            'publish_at'    => '2010-05-03',
        ]);

    $response->assertSuccessful();
    $response->assertSee('My Title');

    $this->assertDatabaseHas('products', [
        'title' => 'My Title',
    ]);
});
