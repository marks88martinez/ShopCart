<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\ProductoCategoria;
use App\Models\ProductoImagen;
use App\Models\ProductoImagenes;
use App\Models\Marca;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;




class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $search =  $request->input('search');

        if ( $request->search) {
            $categorias = Categoria::all();
            $productos = Producto::where('name','like','%'.$search.'%')->orderBy('id','desc')->paginate(20);
        }else{
               // $categorias = Categoria::whereNull('categorias_id')->get();
            $categorias = Categoria::all();
            $productos = Producto::orderBy('id','desc')->paginate(20);
        }
    return view('productos.index',compact('productos','categorias'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $subcategorias = Categoria::WhereNotNull('categorias_id')->get();
        $categorias = Categoria::whereNull('categorias_id')->get();
        return view('productos.create', compact('categorias','subcategorias','marcas'));
    }


    public function store(Request $request)
    {
        // return $request->file('images');
         //dd($request);

        $now = now();
        $producto =  Producto::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'slug'=> Str::slug($request->name,'-').'_'.rand(),
            'precio'=> $request->precio ==  null ? 0: $request->precio,
            'marca_id'=> $request->marca,
            'precio_oferta'=> $request->precio_oferta,
            'sku'=> $request->sku,
            'destacado'=> $request->input('destacado') ==  0 ? 'Active': 'Inactive',
            'status'=> $request->input('status') ==  0 ? 'Active' : 'Inactive'

        ]);

            // ## Producto Categorias TB
            if ($request->categorias_id ) {
                foreach ($request->categorias_id as $cat) {
                    ProductoCategoria::create([
                        'producto_id'=> $producto->id,
                        'categoria_id'=> $cat,
                    ]);
                }
            }

        if ($request->Subcategorias_id) {
            foreach ($request->Subcategorias_id as $cat) {
                ProductoCategoria::create([
                    'producto_id'=> $producto->id,
                    'categoria_id'=> $cat,
                ]);
            }
        }
        // ## Productos Imagenes TB

        $imagenes = '';
        // $paths = [];
        // $request->validate([
        //     'file'=>'image|max:2048'
        // ]);

        // if ($request->images) {
        //     $images = $request->file('images');

        //     foreach ($images as $f) {

        //         $name = $f->store('public/productos');
        //             // $store= Storage::url($name);
        //             // array_push($paths, $store);


        //         $url =  Storage::url($name);

        //            $producto_Imagenes =  ProductoImagenes::create([
        //                 'path_image'=> $url,
        //             ]);
        //            ProductoImagen::create([
        //                 'producto_id'=> $producto->id,
        //                 'imagen_id'=> $producto_Imagenes->id,
        //             ]);
        //     }

        // }


        ///////////////////////////////////

        // Validación de las imágenes
        $request->validate([
            'images.*' => 'image|max:2048', // Valida cada imagen individualmente
        ]);

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                // Guardar la imagen original
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/productos', $imageName);

                // Procesamiento de la imagen para tamaño 200x200
                $image200 = $this->resizeImage($image, 200, 200);
                $imageName200 = '200x200_' . $imageName;
                $this->saveImage($image200, $imageName200);

                // Procesamiento de la imagen para tamaño 1024x1024
                $image1024 = $this->resizeImage($image, 1024, 1024);
                $imageName1024 = '1024x1024_' . $imageName;
                $this->saveImage($image1024, $imageName1024);

                // Guardar la URL de las imágenes en la base de datos
                $producto_Imagenes = ProductoImagenes::create([
                    'path_image' => '/storage/productos/' . $imageName,
                    'path_image_200x200' => '/storage/productos/' . $imageName200,
                    'path_image_1024x1024' => '/storage/productos/' . $imageName1024,
                ]);


                ProductoImagen::create([
                    'producto_id' => $producto->id,
                    'imagen_id' => $producto_Imagenes->id,
                ]);
            }
        }


        return redirect('/admin/productos')->with('success','Producto Registrado Correctamente');

    }


    private function resizeImage($image, $width, $height)
    {
        // Redimensionar la imagen
        $img = Image::make($image)->fit($width, $height);
        return $img->encode(); // Devuelve el contenido de la imagen
    }

    private function saveImage($imageContent, $imageName)
    {
        // Guardar la imagen redimensionada
        Storage::put('public/productos/' . $imageName, $imageContent);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Producto::where('slug','=', $slug)->firstOrFail();
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marcas = Marca::all();
        $producto = Producto::find($id);

        $subcategorias = Categoria::WhereNotNull('categorias_id')->get();
         $categorias = Categoria::whereNull('categorias_id')->with(['children'])->get();
        $proCat =  Categoria::rightJoin('producto_categoria','categorias.id','producto_categoria.categoria_id')
        // ->select('categorias.name','categorias.id')
        ->rightJoin('productos','productos.id','producto_categoria.producto_id')
        ->where('productos.id',$id)
        ->pluck('categorias.id')
        ->toArray();

        // ->get();
        // $prodcat =  Producto::where('id','=',$id)->with(['categorias'])
        // ->get();
        // $proCat =  Producto::with(['categorias'])
        // ->where('id',$id)
        // ->first();

        // return $proCat;
       return view('productos.edit',compact('producto','categorias','subcategorias','proCat','marcas'));
    }
    public function imagenTable($id)
    {
      $productos = Producto::find($id);

      $productoPhotos = $productos->productoImagenes;
      return response()->json(compact('productoPhotos'));
    }
    public function imageEliminar($id)
    {
        $idProducto = productoImagen::select('producto_id')->where('imagen_id',$id)->first()->toArray();
        $imagen = productoImagenes::find($id);
        // foreach ($imagen as $prodImg) {
            if (File::exists(public_path( $imagen->path_image))) {
                File::delete(public_path( $imagen->path_image));
            }
            if (File::exists(public_path( $imagen->path_image_200x200))) {
                File::delete(public_path( $imagen->path_image_200x200));
            }
            if (File::exists(public_path( $imagen->path_image_1024x1024))) {
                File::delete(public_path( $imagen->path_image_1024x1024));
            }
        // }
        $imagen->delete();
        return $idProducto;

        // $productoImagen = productoImagen::where('image_id',$id)->get();
        // $productoImagen->destroy();

        // return response()->json(compact('idProducto'));

    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $producto = Producto::find($id);
        try {
            //code...

                $producto->fill([

                    'name'=> $request->name,
                    'description'=> $request->description,
                    'slug'=> Str::slug($request->name,'-').'_'.rand(),
                    'precio'=> $request->precio,
                    'marca_id'=> $request->marca,
                    'precio_oferta'=> $request->precio_oferta,
                    'sku'=> $request->sku,

                    'destacado'=> $request->has('destacado')  ? 'Active': 'Inactive',
                    'status'=> $request->has('status') ? 'Active' : 'Inactive'

                ]);



                 $producto->categorias()->sync($request->categorias_id);

            } catch (\Throwable $th) {
                //throw $th;
            }






        // if ($request->images) {
        //     $images = $request->file('images');

        //     foreach ($images as $f) {

        //         $name = $f->store('public/productos');

        //         $url =  Storage::url($name);


        //            $producto_Imagenes =  ProductoImagenes::create([
        //                 'path_image'=> $url,
        //             ]);
        //            ProductoImagen::create([
        //                 'producto_id'=> $producto->id,
        //                 'imagen_id'=> $producto_Imagenes->id,
        //             ]);
        //     }

        // }
        /////////////////////////

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                // Guardar la imagen original
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/productos', $imageName);

                // Procesamiento de la imagen para tamaño 200x200
                $image200 = $this->resizeImage($image, 200, 200);
                $imageName200 = '200x200_' . $imageName;
                $this->saveImage($image200, $imageName200);

                // Procesamiento de la imagen para tamaño 1024x1024
                $image1024 = $this->resizeImage($image, 1024, 1024);
                $imageName1024 = '1024x1024_' . $imageName;
                $this->saveImage($image1024, $imageName1024);

                // Guardar la URL de las imágenes en la base de datos
                $producto_Imagenes = ProductoImagenes::create([
                    'path_image' => '/storage/productos/' . $imageName,
                    'path_image_200x200' => '/storage/productos/' . $imageName200,
                    'path_image_1024x1024' => '/storage/productos/' . $imageName1024,
                ]);

                ProductoImagen::create([
                    'producto_id' => $producto->id,
                    'imagen_id' => $producto_Imagenes->id,
                ]);
            }
        }




        $producto->save();
        // return Redirect('/productos')->with('success','Producto Actualizado');
        return back()->with('success','Producto Registrado Correctamente');
    }


    public function destroy($id)
    {
        $producto = Producto::find($id);

        foreach ($producto->productoImagenes as $prodImg) {
            if (File::exists(public_path( $prodImg->path_image))) {
                File::delete(public_path( $prodImg->path_image));
            }
        }
        $producto->delete();

        return Redirect('/admin/productos')->with('danger','Producto Eliminada con sucesso');

    }
}
