<?php

namespace App\Http\Controllers;
use \App\Models\Curso;

use Illuminate\Http\Request;

class CursoController extends Controller
{
  public function index (){
    $cursos = Curso::orderBy('id', 'desc')-> paginate(); /* si cambio el all() por el paginate me muestra de a 15 registros */
    return view('cursos.index', compact('cursos'));}



  public function create (){return view('cursos.create');}

/* siempre que paso un formulario, recupero los datos que ingreso con un Request $request */
public function nuevo(Request $request){
  /* para guardar un registro les paso los datos a una variable y le digo que es una nueva
  instancia del controlador */
  $curso = new Curso();
  /* ahora quiero decirle que el nombre de este curso sea igual que lo que se ha enviado 
  por el formulario con el nombre NOMBRE, hago igual con CATEGORIA y DESCRIPCION */
  $curso ->nombre = $request->nombre;
  $curso ->descripcion = $request->descripcion;
  $curso ->categoria = $request->categoria;
/* hago que el registro se guarde */
  $curso->save();
  /* ahora redirecciono a la pagina que quiero */
  return redirect()->route('show', $curso);
  
}
public function editar (Curso $curso){
  
  return view('cursos.editar', compact('curso'));
}
public function modificar (Request $request, Curso $curso){
 $curso->nombre = $request->nombre;
 $curso->descripcion = $request->descripcion;
 $curso->categoria = $request->categoria;
 $curso->save();
 return redirect()->route('show', $curso);
  
  
}



  public function show ($id){
    
    $curso=Curso::find($id);
    
    return view('cursos.cursos', compact('curso'));}
}

