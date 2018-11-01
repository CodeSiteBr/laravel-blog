<?php

namespace App\Models\User;

use App\Models\User\post;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Models\User\post', 'like');
    }
}
