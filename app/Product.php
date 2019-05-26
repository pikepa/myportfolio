<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


class Product extends Model implements HasMedia
{
    use HasMediaTrait;

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

    // Media Definitions
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
              ->width(368)
              ->height(232)
              ->sharpen(10);
    }
}
