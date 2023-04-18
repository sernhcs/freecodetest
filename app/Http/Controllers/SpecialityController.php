<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller{

    public function getSpeciality($id)
    {
        $courses = Speciality::where('id',$id )
            ->with('courses.lessons')
            ->first();
        return response()->json([
            "success" => true,
            "message" => "Curso",
            "data" => $courses
        ]);
    }
}
