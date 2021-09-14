
@extends('plantillas.plantilla')

@section('titulo','MOSTRAR CURSOS')
@section('contenido')
<h1> cursos: {{ $curso->nombre }}</h1>

<p><strong>Categoria: {{$curso->categoria}}</strong></p>
<p><strong>descripcion: {{$curso->descripcion}}</strong></p>
<a href="{{route('index')}}">VOLVER A LOS CURSOS</a>
<br><br>
<a href="{{route('editar',$curso)}}">EDITAR CURSOS</a>
<br><br>




@endsection