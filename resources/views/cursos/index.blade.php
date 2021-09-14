@extends('plantillas.plantilla')

@section('titulo','INDEX')

@section('contenido')

<h1>ACA ESTA LA PAGINA PRINCIPAL PERO CON BLADE</h1>


<a href="{{route('crear')}}">CREAR CURSO</a>


<ul>

@foreach ($cursos as $curso)

<li>
<a href="{{route('show', $curso ->id)}}">{{$curso->nombre}}</a>

</li>

    
@endforeach

</ul>

{{ $cursos->links() }}


@endsection