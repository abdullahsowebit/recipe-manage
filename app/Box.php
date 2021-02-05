<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $guarded = [];
    protected $table= 'box';

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    //
}
 