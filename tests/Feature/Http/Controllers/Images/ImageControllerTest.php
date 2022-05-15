<?php


test('an image can be displayed on its own in a full page', function () {
    $image = ['id' => '99'];

    $response = $this->get('/images/$image->id');

    $response->assertStatus(200);
});
