<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

     //    relacon 1->n
    public function lessons (){
        return $this->hasMany('App\Models\Lesson');
    }
    //    relacion muchos a muchos
    public function specialities(){
        return $this->belongsToMany('App\Models\Speciality','course_speciality','course_id');
    }

}
