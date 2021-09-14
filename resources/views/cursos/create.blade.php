
@extends('plantillas.plantilla')

@section('titulo','CREAR CURSOS')
@section('contenido')
<h1> CREAR CURSOS</h1>
<form action="{{route('nuevo')}}" method='POST'>

    @csrf {{-- esto es un token para validar el formulario --}}
<label>
    NOMBRE:
    <br> <br>
<input type="text" name="nombre" value="{{old('nombre')}}">
</label>
@error('nombre')
<br>
<small>*{{$message}}</small>
<br>   
@enderror


<label> 
    <br> <br>
    DESCRIPCION:
    <br> <br>
<textarea name="descripcion" cols="30" rows="5">{{old('descripcion')}}</textarea>
</label>
@error('descripcion')
<br>
<small>*{{$message}}</small>
<br>
    
@enderror


<label>
    <br> <br>
    CATEGORIA:
    <br> <br>
<input type="text" name="categoria" value="{{old('categoria')}}">
</label>
@error('categoria')
<br>
<small>*{{$message}}</small>
<br>
@enderror


<br><br>
<button type="submit">ENVIAR FORMULARIO</button>


</form>




@endsection