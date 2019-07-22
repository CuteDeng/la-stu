<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    public $timestamps = false;

    //一对一
    public function author(){
        return $this->hasOne('App\Home\Author','id','author_id');
    }

    //一对多
    public function comment(){
        return $this->hasMany('App\Home\Comment','article_id','id');
    }

    //多对多
    public function keyword(){
        return $this->belongsToMany('App\Home\Keyword','relation','article_id','keyword_id');
    }

}
