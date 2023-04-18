<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //enlista category
    public function index()
    {
        $courses = Courses::orderBy('id', 'desc')->paginate(5);
        return response()->json([
            "success" => true,
            "message" => "Courses List",
            "data" => $courses
        ]);
    }
}
