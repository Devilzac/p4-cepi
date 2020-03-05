<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class FormularioController extends Controller
{
    public function busqueda_por_titulo(Request $request){
        $titulo = $request->input("titulo");
        $libros= Libro::where("titulo",$titulo)->get();
        return view("mostrarlibros", compact("libros"));
    }
}
