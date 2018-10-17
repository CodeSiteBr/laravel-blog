<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    public function posts()
    {
        return $this->belongsToMany('App\Models\User\post','category_posts')->orderBy('created_at', 'DESC')->paginate(5);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
