@extends('layouts.plantilla')
@section('title','cursos ' .$curso->name)
@section('content')
    <h1>Curso: {{$curso->name}}
        <br>
        <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Categoria:{{$curso->categoria}}</strong></p>
    <p>Descripcion:{{$curso->descripcion}}</p>
@endsection
