<?php

namespace App\Models\User;

use App\Models\User\like;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Models\User\tag', 'post_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\User\category', 'category_posts')->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }



    public function likes()
    {
        return $this->hasMany('App\Models\User\like');
    }



    public function getSlugAttributr($value)
    {
        return route('post', $value);
    }
}
