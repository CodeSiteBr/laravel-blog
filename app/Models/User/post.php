<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Models\User\tag','post_tags');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\User\category','category_posts');
    }
}
