<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

//    relacion 1-n invresar
    public function user(){
        return $this->belongsTo('App\Models\User');
    }


//    relacion polimorfica
    public function commentable(){
        return $this->morphTo();
    }
}
