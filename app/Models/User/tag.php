<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Models\User\post','post_tags');
    }
}
