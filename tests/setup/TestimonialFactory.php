<?php

namespace Tests\Setup;

use App\Testimonial;
use App\User;

class TestimonialFactory
{
    /**
     * The owner of the project.
     *
     * @var User
     */
    protected $user;

    /**
     * Set the owner of the new project.
     *
     * @param  User $user
     * @return $this
     */
    public function ownedBy($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Arrange the world.
     *
     * @return Testimonial
     */
    public function create()
    {
        $testimonial = factory(Testimonial::class)->create([
            'owner_id' => $this->user ?? factory(User::class)
        ]);
        
        return $testimonial;
    }
}