<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['name', 'comment' ];

    protected $hidden = ['created_at','updated_at'];

    public function film()
    {
        return $this->belongsTo('Film');
    }
}
