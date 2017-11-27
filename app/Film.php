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
}
