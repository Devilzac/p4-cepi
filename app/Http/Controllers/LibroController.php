<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
       // dd($libros);
        return view('index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                "titulo" => ['required', 'min:1'],
                "npaginas" => ['required', 'numeric'],
                "resumen" => ['required', 'min:1'],
                "nedicion" => ['required', 'numeric'],
                "precio" => ['required', 'numeric'],
                "autor" =>['required', 'min:1']
            ]);
        Libro::create($request->all());
        return redirect()->route("formulario.index")->with('todook','Libros añadidos correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        return view("edit", compact("libro"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        
        $this->validate($request, [
                "titulo" => ['required', 'min:1'],
                "npaginas" => ['required', 'numeric'],
                "resumen" => ['required', 'min:1'],
                "nedicion" => ['required', 'numeric'],
                "precio" => ['required', 'numeric'],
                "autor" =>['required', 'min:1']
            ]);
        Libro::find($id)->update($request->all());
        return redirect()->route("formulario.index")->with('todook','Libros se actializaron correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libro::find($id);
        $titulo = $libro->titulo;
        $libro->delete();
        
        return redirect()->route("formulario.index")->with('todook',"El libro titulado '$titulo' fue borrado correctamente");
    }
}
