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
    use WithFaker, RefreshDatabase;

            /** @test */
            public function a_guest_can_view_all_testimonials()
            {
              $testimonial = TestimonialFactory::create();
  
              $this->get('/testimonials')
                   ->assertSee($testimonial->client_name)
                   ->assertSee($testimonial->country)
                   ->assertSee($testimonial->story);
                
            }
            
            /** @test */
            function a_guest_gets_redirected_if_they_try_to_manage_testimonials()
            {
                $testimonial = TestimonialFactory::create();

                $this->get('/testimonials/create')->assertRedirect('login');
                $this->get($testimonial->path().'/edit')->assertRedirect('login');
                $this->post('/testimonials', $testimonial->toArray())->assertRedirect('login');
            }

            /** @test */
            function a_signed_in_user_can_edit_their_testimonial()
            {
                $this->signIn();
                $testimonial = TestimonialFactory::create();
                $this->get($testimonial->path().'/edit')->assertStatus(200);
 
            }

            /** @test */
            function a_registered_user_can_add_their_testimonial()
            {
                $this->signIn();
                $this->get('testimonials/create')->assertStatus(200);

                $attributes=[
                'client_name' =>$this->faker->name, 
                'country' => $this->faker->country, 
                'story'=>$this->faker->paragraph,
                'img_name'=>'null',
                'approved'=>'no'
                ];
             
                $this->post('/testimonials',$attributes)->assertRedirect('/testimonials');

                $this->assertDatabaseHas('testimonials',$attributes);
                $this->get('/testimonials')->assertSee($attributes['client_name']);

            }

            /** @test */
            function a_user_can_delete_their_testimonial()
            {
                $testimonial = TestimonialFactory::create();

                $this->actingAs($testimonial->owner)
                     ->delete($testimonial->path())
                     ->assertRedirect('/testimonials');
                $this->assertDatabaseMissing('testimonials', $testimonial->only('id'));
            }


            /** @test */
            function a_user_can_not_delete_another_users_testimonial()
            {
                $testimonial = TestimonialFactory::create();

                $this->signIn();

                $this->delete($testimonial->path())
                     ->assertStatus(403);
                $this->assertDatabaseHas('testimonials', $testimonial->only('id'));
            }

}
