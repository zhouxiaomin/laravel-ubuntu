<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // 多对多
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
