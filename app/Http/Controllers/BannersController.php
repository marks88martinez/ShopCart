<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;
use App\Models\CategoriaBanner;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class BannersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $banners = Banner::all();
      
        return view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cat_banners = CategoriaBanner::all();
        return view('banners.create', compact('cat_banners'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'file'=>'required|image|max:2048'
        ]);
        //php artisan storage:link   /// crea acceso directo a la carpeta public de las imagenes a storage
        // if ($request['categoria_banner_id'] == 1) {
        //     $imagenes = $request->file('file')->store('public/imagenes');
        //     $url = Storage::url($imagenes);

        //     Banner::create([
        //         'name'=> $request['name'],
        //         'categoria_banner_id'=> $request['categoria_banner_id'],
        //         'path_url'=> $request['path_url'],
        //         'path_image'=> $url
        //     ]);

        // }
            if ($request->file('file')) {
                
        
            /////////////////////////imagen ////////////////////
                $image = $request->file('file');

                // foreach ($images as $image) {
                // Guardar la imagen original
                $imageName = time() . '_' . $image->getClientOriginalName();
               
                // if ($request['categoria_banner_id'] == 1) {
                //     $image->storeAs('public/imagenes', $imageName);
                // }

                // Procesamiento de la imagen para tamaño 270
                if ($request['categoria_banner_id'] == 1 ) {
                    $imageSession = $this->resizeImage($image, 1280, 400);
                    $imageName = '1280x400_' . $imageName;
                }
                if ($request['categoria_banner_id'] == 2 || $request['categoria_banner_id'] == 4) {
                    $imageSession = $this->resizeImage($image, 270, 270);
                    $imageName = '270x270_' . $imageName;
                }
                if ($request['categoria_banner_id'] == 3) {
                    $imageSession = $this->resizeImage($image, 540, 255);
                    $imageName = '540x255_' . $imageName;
                }
                if ($request['categoria_banner_id'] == 5 || $request['categoria_banner_id'] == 6) {
                    $imageSession = $this->resizeImage($image, 540, 208);
                    $imageName = '540x208_' . $imageName;
                }
                if ($request['categoria_banner_id'] == 7 ) {
                    $imageSession = $this->resizeImage($image, 825, 190);
                    $imageName = '825x190_' . $imageName;
                }
                if ($request['categoria_banner_id'] == 8 ) {
                    $imageSession = $this->resizeImage($image, 270, 345);
                    $imageName = '270x345_' . $imageName;
                }
                $this->saveImage($imageSession, $imageName);
            }
            //////////////////////////////////////////////////////
            if ($request->file('file')) {
                $url =  '/storage/imagenes/' . $imageName;
            }else {
                $url = null;
            }
            Banner::create([
                'name'=> $request['name'],
                'categoria_banner_id'=> $request['categoria_banner_id'],
                'path_url'=> $request['path_url'],
                'path_image'=> $url,
            ]);
      


      
        return redirect('admin/banners');
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
        Storage::put('public/imagenes/' . $imageName, $imageContent);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        $cat_banners = CategoriaBanner::all();
        return view('banners.edit', compact('banner','cat_banners'));
    }
    public function bannerEliminar($id)
    {

        $banner = Banner::find($id);

        if (File::exists(public_path( $banner->path_image))) {
                File::delete(public_path( $banner->path_image));
        }

        $banner->fill([
            'path_image' => null
        ]);
        $banner->save();
        return response()->json(['success']);
        // return response()->json($banner );

    }

    public function update(Request $request, $id)
    {


        $banner = Banner::find($id);
        if ($request->file) {
            if (File::exists(public_path( $banner->path_image))) {
                File::delete(public_path( $banner->path_image));
            }
        }
        $banner->fill([
              'name' => $request->name,
              'path_url' => $request->path_url,
            //   'path_image' => $url
        ]);

        if ($request->file) {
            $request->validate([
                    'file'=>'image|max:2048'
            ]);
                //php artisan storage:link   /// crea acceso directo a la carpeta public de las imagenes a storage
              $imagenes = $request->file('file')->store('public/imagenes');
              $url = Storage::url($imagenes);
              $banner->fill([
                'path_image' => $url
          ]);

        }
        $banner->save();
        return Redirect('admin/banners')->with('success','Banner Actualizado con sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if (File::exists(public_path( $banner->path_image))) {
            File::delete(public_path( $banner->path_image));
        }
        
        $banner->delete();
        return Redirect('admin/banners')->with('success','banner delete con sucesso');
    }
}
