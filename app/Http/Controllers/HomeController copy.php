<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function index()
    {

        $productos = Producto::where('status','=','Active')
        ->where('destacado','=','Active')
        ->orderByRaw('RAND()')->limit(8)->get();

        return view('cliente.vistas.inicio', compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto::where('slug','=',$id)->first();

        $productos = Producto::where('status','=','Active')->orderByRaw('RAND()')->limit(4)->get();

        // dd('funka');
        return view('cliente.vistas.producto', compact('producto','productos'));
    }
    public function allProducto()
    {
        // $producto = Producto::where('slug','=',$id)->first();
        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->get();


        $productos = Producto::where('status','=','Active')->orderByRaw('RAND()')->paginate(12);

        // dd('funka');
        return view('cliente.vistas.allproducto', compact('productos','categorias'));
    }
    public function categoriaProd($id)
    {
        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->get();
        $catchilid = Categoria::where('id','=',$id)
        // ->whereNull('categorias_id')
        ->with(['children','pather'])
        ->first();

        $_id =  isset($catchilid->pather->id)? $catchilid->pather->id: $id;
        $catchildren = Categoria::where('id','=', $_id)
        // ->whereNull('categorias_id')
        ->with(['children','pather'])
        ->get();
        // $productos = Producto::with('categorias' )->get();
        // $productos = Categoria::with('productos' )->get();
        $prod_categorias = Categoria::find($id);

        $productos = $prod_categorias->productos;
        // return $productos;

        // $productos = Producto::where('status','=','Active')->orderByRaw('RAND()')->paginate(12);

        // dd('funka');
        return view('cliente.vistas.catproducto', compact('productos','categorias','catchildren'));
    }
    public function contacto()
    {

        return view('cliente.vistas.contacto');
    }
}
