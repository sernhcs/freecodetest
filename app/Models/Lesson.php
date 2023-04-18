<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    //    relacion 1-n inversa
    public function course (){
        return $this->belongsTo('App\Models\Courses');
    }


}
