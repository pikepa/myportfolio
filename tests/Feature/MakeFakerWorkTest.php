<?php
use Pest\Faker\Faker;
use function Pest\Faker\faker;
  
it('generates a name using faker', function () {
    $name = $this->faker()->name;
 
    // Same as:
    $name = $this->faker()->name;
 
    $this->assertIsString($name);
})->skip();