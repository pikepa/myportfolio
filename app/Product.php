<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    public function path(){
        return "/product/{$this->id}" ;
    }
    
    public function owner(){
        return $this->belongsTo(User::class) ;
    }
}
