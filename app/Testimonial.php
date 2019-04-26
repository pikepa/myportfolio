<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded=[];

    public function path(){
        return "/testimonials/{$this->id}" ;
    }
    
    public function owner(){
        return $this->belongsTo(User::class) ;
    }
}
