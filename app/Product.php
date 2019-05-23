<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

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
        * query to get products with status.
        *
        * @return string
        */
        public function scopeStatus($query,$value)
        {
            return $query->where('status', $value);
        }

    public function path(){
        return "/product/{$this->id}" ;
    }
    
    public function owner(){
        return $this->belongsTo(User::class) ;
    }
}
