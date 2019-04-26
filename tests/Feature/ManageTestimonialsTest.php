<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use App\Testimonial;
use Facades\Tests\Setup\TestimonialFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageTestimonialsTest extends TestCase
{
    use RefreshDatabase;

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

            /** @test */
            public function a_guest_can_view_all_testimonials()
            {
              $testimonial = TestimonialFactory::create();
  
              $this->get('/testimonials')
                    ->assertSee($testimonial->client_name)
                    ->assertSee($testimonial->country)
                    ->assertSee($testimonial->story);
            }

}
