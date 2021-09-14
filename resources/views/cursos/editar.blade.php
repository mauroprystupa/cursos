
@extends('plantillas.plantilla')

@section('titulo','EDITAR CURSOS')
@section('contenido')
<h1> EDITAR CURSOS</h1>
<form action="{{route('modificar', $curso)}}" method='post'>
    

    @csrf {{-- esto es un token para validar el formulario --}}
    @method('put')



<label>
    NOMBRE:
    <br> <br>
<input type="text" name="nombre" value="{{old('nombre',$curso->nombre)}}">
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
<textarea name="descripcion" cols="30" rows="5" >{{old('descripcion',$curso->descripcion)}}{{-- en el caso del textarea, al no tener la propiedad value
        se coloca dentro del mismo textarea --}}
</textarea>
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
<input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
</label>
@error('categoria')
<br>
<small>*{{$message}}</small>
<br>   
@enderror




<br><br>
<button type="submit">EDITAR FORMULARIO</button>


</form>




@endsection