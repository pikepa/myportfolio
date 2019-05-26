<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    protected $dates = ['publish_at'];

     /**
     * Get the user's discounted Price.
     *
     * @return string
     */
    public function getDiscountedPriceAttribute()
    {
        $discount = $this->price * ($this->discount/100);
      return $this->price - $discount ;
      // return number_format( ($this->price - $discount ),2,'.', ',');
    }
/**
     * Scope a query to only include users of a given status.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfStatus($query, $status)
    {
        return $query->where('status',$status);
    }


    public function path(){
        return "/product/{$this->id}" ;
    }
    
    public function owner(){
        return $this->belongsTo(User::class) ;
    }
}
