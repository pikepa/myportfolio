<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $dates = ['created_at'];

    protected $guarded = [];

    /**
     * Format the message created date.
     */
    public function getCreatedDateAttribute()
    {
        return $this->created_at->format('M j, Y');
    }

    /**
     * Format the message has a path.
     */
    public function path()
    {
        return "/message/{$this->id}";
    }
}
