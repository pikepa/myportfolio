<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Auth\Middleware\Auth;
use Facades\Tests\Setup\ProductFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageProductsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

            /** @test */
            public function a_guest_can_view_all_products()
            {
             $product = ProductFactory::create();
  
               
              $this->get('/')
                   ->assertSee($product->title)
                   ->assertSee(substr($product->description ,0,150))
                   ->assertSee(number_format($product->price/100,2,'.', ','))
                   ->assertSee($product->status);
                
            }
            
            /** @test */
            function a_guest_gets_redirected_if_they_try_to_manage_products()
            {
                $product = ProductFactory::create();

                $this->get('/product/create')->assertRedirect('login');
                $this->get($product->path().'/edit')->assertRedirect('login');
                $this->post('/product', $product->toArray())->assertRedirect('login');
            }

            /** @test */
            function a_signed_in_user_can_edit_their_product()
            {
                $user=$this->signIn();                                                                                     
                $product = ProductFactory::create();        
                $this->get($product->path().'/edit')->assertStatus(200);
               // $this->signIn();                             
                                                                                                                                                                                                                                                                                                                                                       
               // $this->get($product->path().'/edit')->assertStatus(200);
 
            }

            /** @test */
            function a_registered_user_can_add_their_product()
            {
                $this->withoutExceptionHandling();
                $this->signIn();

                $this->get('/product/create')->assertStatus(200);

                 $attributes=[
                    'title' => $this->faker->name, 
                    'description'=>$this->faker->paragraph,
                    'status'=>$this->faker->randomElement(['For Sale', 'Sold', 'Not for Sale']),
                    'price' => 99999,
                    'featured_img'=>'/images/uploads/Cudis_3939.jpg',
                    'discount' => 0,
                    ];
             
                $this->post('product',$attributes)->assertStatus(200);

          //     $this->assertDatabaseHas('testimonials',$attributes);
          //      $this->get('/testimonials')->assertSee($attributes['client_name']);

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
