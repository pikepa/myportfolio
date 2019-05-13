<?php

namespace Tests\Unit;

use Tests\TestCase;
use Facades\Tests\Setup\TestimonialFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestimonialTest extends TestCase
{
    use WithFaker, RefreshDatabase;
            /** @test */
            public function it_has_a_path()
            {
                $this->withoutExceptionHandling();
                $testimonial = TestimonialFactory::create();

                $this->assertEquals('/testimonials/'. $testimonial->id,$testimonial->path());
            }   

            /** @test */
            public function an_testimonial_belongs_to_an_owner()
            {
                $testimonial = TestimonialFactory::create();

                $this->assertInstanceOf('App\User', $testimonial->owner);
            }


}
