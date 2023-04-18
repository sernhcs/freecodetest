<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $cursos = Courses::paginate();
        return view('cursos.index',compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }
    public function show($id){
        $curso = Courses::find($id);
        return view('cursos.show',compact('curso'));
    }
}

