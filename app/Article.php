<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['title','content','published_at','user_id','intro'];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }

    // 一对多
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // 多对多
    public function tags()
    {
//        return $this->belongsToMany('App\Tag');
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
