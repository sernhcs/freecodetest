<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    //    relacion muchos a muchos
    public function courses(){
        return $this->belongsToMany('App\Models\Courses');
    }
}
