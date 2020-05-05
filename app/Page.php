<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $dates = ['created_at', 'published_at'];

    protected $guarded = [];

    /**
     * Format the message created date.
     */
    public function getCreatedDateAttribute()
    {
        return $this->created_at->format('M j, Y');
    }

    /**
     * Format the page has a path.
     */
    public function path()
    {
        return "/page/{$this->id}";
    }
}
