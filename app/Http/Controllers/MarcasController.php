<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MarcasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index',compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( $request->file('file')) {
            # code...
            

            $request->validate([
                'file'=>'required|image|max:2048'
            ]);
            //php artisan storage:link   /// crea acceso directo a la carpeta public de las imagenes a storage

            $imagenes = $request->file('file')->store('public/marcas');
            $url = Storage::url($imagenes);
            Marca::create([
                'name'=> $request->name,
                'path_image'=> $url
            ]);
        }else{
            Marca::create([
                'name'=> $request->name
            ]);

        }
        return redirect('admin/marcas');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $marca = Marca::find($id);
        return view('marcas.edit',compact('marca'));
    }

    public function marcaEliminar($id)
    {

        $marca = Marca::find($id);
        if (File::exists(public_path( $marca->path_image))) {
            File::delete(public_path( $marca->path_image));
        }

        $marca->fill([
            'path_image' => null
        ]);
        $marca->save();
        return response()->json(['success']);

    }
    public function update(Request $request, $id)
    {
        $marca = Marca::find($id);
        $marca->fill([
              'name' => $request->name
        ]);

        if ($request->file) {
            $request->validate([
                    'file'=>'image|max:2048'
            ]);
                //php artisan storage:link   /// crea acceso directo a la carpeta public de las imagenes a storage
              $imagenes = $request->file('file')->store('public/marcas');
              $url = Storage::url($imagenes);
              $marca->fill([
                'path_image' => $url
          ]);

        }
        $marca->save();
        return Redirect('admin/marcas')->with('success','Marca Actualizado con sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        return Redirect('admin/marcas')->with('success','Marca Eliminada con sucesso');

    }
}
