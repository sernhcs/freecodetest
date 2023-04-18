<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
//    realcion 1-n inversar

    public function user (){
        return $this->belongsTo('App\Models\User');
    }
    public function categoria (){
        return $this->belongsTo('App\Models\Categoria');
    }

//    1-1 polimorficas
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

//    1-n polimorficas
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
//    relacion n-n polimorficas
    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}

































