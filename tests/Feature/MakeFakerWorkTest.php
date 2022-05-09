<?php

use Pest\Faker\Faker;
use function Pest\Faker\faker;

it('generates a name using faker', function () {
    $name = faker()->name;

    // Same as:
    $name = faker()->name;

    $this->assertIsString($name);
});
