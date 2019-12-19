<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded =[];
    /*
    public function getRouteKeyName(){
        return 'slug'; //Article::where('slug',$article)->first
    }
    */
    public function path(){
        return route('article.show',$this);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
