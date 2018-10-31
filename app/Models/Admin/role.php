<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany('App\Models\Admin\Permission');
    }
}
