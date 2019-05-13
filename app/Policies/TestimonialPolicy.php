<?php

namespace App\Policies;

use App\User;
use App\Testimonial;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestimonialPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function manage(User $user, Testimonial $testimonial)
    {
        return $user->is($testimonial->owner);
    }
}
