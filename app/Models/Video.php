<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //    relacion uno a muchos inversa
    public function user (){
        return $this->belongsTo('App\Models\User');
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
