<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['name', 'ticket_price','description',
        'release_date',
        'rating' ,
        'genre' ,
        'country',
        'photo' ];

    protected $hidden = ['created_at','updated_at'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function getCommentsAttribute()
    {
        return array_flatten($this->comments()->get(['comment'])->toArray());
    }
}
