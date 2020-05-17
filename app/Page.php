<?php

namespace App;

use App\Paragraph;
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

    public function paras()
    {
        return $this->hasMany(Paragraph::class);
    }
    /**
     * Format the page has a path.
     */
    public function path()
    {
        return "/page/{$this->id}";
    }
}
