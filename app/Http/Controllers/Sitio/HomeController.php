<?php

namespace App\Http\Controllers\Sitio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;
use App\Models\Banner;
use App\Models\Categoria;
use App\Models\User;
use App\Mail\ClienteWeb;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;
use App\Models\OrderProduct;


class HomeController extends Controller
{
    public function shop(Request $request)
    {
      
        // $destinatario = 'marks88martinez@gmail.com';
        // // $datos = 'list'; // Datos que deseas pasar al correo electrónico

        // Mail::to($destinatario)->send(new ClienteWeb());
        

        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->orderBy('id', 'DESC')
        ->get();

  
    //    // Obtener las categorías con hasta 3 productos aleatorios por categoría
    //     $cats = Categoria::whereNull('categorias_id')->has('productos')->inRandomOrder()->take(3)->get();

    //     // Array para almacenar las categorías y sus productos
    //     $categoriasConProductos = [];

    //     // Iterar sobre cada categoría
    //     foreach ($cats as $categoria) {
    //         // Obtener todos los productos asociados a la categoría actual que estén activos y destacados
    //         $productos = $categoria->productos()
    //             ->where('status', 'active')
    //             ->with('productoImagen') 
    //             ->inRandomOrder()
    //             ->get();

    //         // Dividir los productos en grupos de tres
    //         $productosPorGrupos = array_chunk($productos->toArray(), 3);

    //         // Almacenar la categoría y sus productos en el array
    //         $productosIndex = 0;
    //         foreach ($productosPorGrupos as $grupoProductos) {
    //             $categoriasConProductos[$categoria->name][$productosIndex] = $grupoProductos;
    //             $productosIndex++;
    //         }
    //     }


        
    //     dd($categoriasConProductos);

    ///////////////////////////////
    // Obtener las categorías con hasta 3 productos aleatorios por categoría
    $cats = Categoria::whereNull('categorias_id')->has('productos')->inRandomOrder()->take(3)->get();

    // Array para almacenar las categorías y sus productos
    $categoriasConProductos = [];

    // Iterar sobre cada categoría
    foreach ($cats as $categoria) {
        // Obtener todos los productos asociados a la categoría actual que estén activos y destacados
        $productos = $categoria->productos()
            ->where('status', 'active')
            ->with('productoImagenes') 
            ->inRandomOrder()
            ->get();

        // Dividir los productos en grupos de tres
        $productosPorGrupos = array_chunk($productos->toArray(), 3);

        // Almacenar la categoría y sus productos en el array
        $productosIndex = 0;
        foreach ($productosPorGrupos as $grupoProductos) {
            $categoriasConProductos[$categoria->name][$productosIndex] = $grupoProductos;
            $productosIndex++;
        }
    }


    
    //  dd($categoriasConProductos);
    ///////////////////////////////



        // $products = Producto::where('status','active')->inRandomOrder()->limit(20)->get();
        $products_outstanding = Producto::where('status', 'active')
        ->where('destacado', 'Active') // Filtrar productos destacados
        ->inRandomOrder() // Mezclar los resultados
        ->limit(20) // Limitar a 20 productos
        ->get();

        $products_last = Producto::where('status', 'active')
        ->orderBy('created_at', 'desc') // Ordenar por los más recientemente insertados
        ->limit(20)
        ->get();
        $banners = Banner::where('categoria_banner_id', 1)->get();
        $bannersS1 = Banner::where('categoria_banner_id', 2)->inRandomOrder()->first();
        $bannersS2 = Banner::where('categoria_banner_id', 3)->inRandomOrder()->first();
        $bannersS3 = Banner::where('categoria_banner_id', 4)->inRandomOrder()->first();
        $bannersS4 = Banner::where('categoria_banner_id', 5)->inRandomOrder()->first();
        $bannersS5 = Banner::where('categoria_banner_id', 6)->inRandomOrder()->first();
        //dd($products);

    //    dd($categoriasConProductos);

        return view('sitio.shop')->withTitle('Krishna Store | Shop')->with(
            [
                'products_outstanding' => $products_outstanding,
                'products_last' => $products_last,
                'banners' => $banners,
                'bannersS1' => $bannersS1,
                'bannersS2' => $bannersS2,
                'bannersS3' => $bannersS3,
                'bannersS4' => $bannersS4,
                'bannersS5' => $bannersS5,
                'categorias' => $categorias,
                'categoriasConProductos'=> $categoriasConProductos
            ]
        );
    }
    public function detail($slug)
    {
        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->orderBy('id', 'DESC')
        ->get();

        $products_last = Producto::where('status', 'active')
        ->orderBy('created_at', 'desc') // Ordenar por los más recientemente insertados
        ->limit(20)
        ->get();

        $product = Producto::where('slug','=',$slug)->first();
      
        return view('sitio.detail', compact('product','categorias','products_last'));
    }

    // public function products(Request $request)
    // {
    //     $categorias = Categoria::whereNull('categorias_id')
    //     ->with(['children'])
    //     ->orderBy('id', 'DESC')
    //     ->get();
    //     // Obtener el término de búsqueda del formulario
    //     $query = $request->input('query');

    //     // Consulta inicial de todos los productos
    //     $productsQuery = Producto::query()->where('status','active');

    //     // Filtrar productos si hay un término de búsqueda
    //     if ($query) {
    //         // Convertir tanto el término de búsqueda como el campo de la base de datos a minúsculas
    //         $query = strtolower($query);
    //         $productsQuery->whereRaw('LOWER(name) LIKE ?', ["%$query%"]);
    //     }

    //     // Obtener los productos paginados
    //     $products = $productsQuery->paginate(4);

    //     // Conservar el término de búsqueda en los enlaces de paginación
    //     $products->appends(['query' => $query]);

    //     return view('sitio.products', compact('products', 'categorias'));
    // }
    public function products( Request $request)
    {

        $categoriaSeleccionada = $request->input('categoria');

        $categorias = Categoria::whereNull('categorias_id')
            ->with(['children'])
            ->orderBy('id', 'DESC')
            ->get();
    
        // Obtener el término de búsqueda del formulario
        $query = $request->input('query');
    
 
        // Consulta inicial de todos los productos
        $productsQuery = Producto::query()->where('status', 'active');
       
    
        // Filtrar productos si hay un término de búsqueda
        if ($query) {
        // Convertir tanto el término de búsqueda como el campo de la base de datos a minúsculas
        $query = strtolower($query);
        $productsQuery->whereRaw('LOWER(name) LIKE ?', ["%$query%"]);
        }

        // Filtrar productos por categoría seleccionada
        if ($categoriaSeleccionada) {
            // $productsQuery->where('categoria_id', $categoriaSeleccionada);
            $productsQuery->whereHas('categorias', function ($query) use ($categoriaSeleccionada) {
                $query->where('categorias.id', $categoriaSeleccionada);
            });
        }
        
       
       
    
        // Obtener los productos paginados
        $products = $productsQuery->paginate(16);
        $productsCount = $productsQuery->count();
        // Conservar el término de búsqueda y la categoría en los enlaces de paginación
        $products->appends(['query' => $query]);

        $bannersS7 = Banner::where('categoria_banner_id', 7)->inRandomOrder()->first();
        $bannersS8 = Banner::where('categoria_banner_id', 8)->inRandomOrder()->first();
        
        
        return view('sitio.products', compact('products', 'categorias','productsCount','bannersS7','bannersS8'));
    }
    
    public function productsById($id)
    {
      
        $categorias = Categoria::whereNull('categorias_id')
            ->with(['children'])
            ->orderBy('id', 'DESC')
            ->get();
    
      
        // Obtener la categoría seleccionada (si existe)
        $categoriaId = $id;
        
        // Consulta inicial de todos los productos
        $productsQuery = Producto::query()->where('status', 'active');
        
    
        // Filtrar productos por categoría si se ha seleccionado una categoría
        if ($categoriaId) {
            $productsQuery->whereHas('categorias', function ($query) use ($categoriaId) {
                $query->where('categorias.id', $categoriaId);
            });
        }
    
        // Obtener los productos paginados
        $products = $productsQuery->paginate(16);
        $productsCount = $productsQuery->count();
        // Conservar el término de búsqueda y la categoría en los enlaces de paginación
        $products->appends(['categoria_id' => $categoriaId]);
        
        $bannersS7 = Banner::where('categoria_banner_id', 7)->inRandomOrder()->first();
        $bannersS8 = Banner::where('categoria_banner_id', 8)->inRandomOrder()->first();
        
        return view('sitio.products', compact('products', 'categorias','productsCount', 'bannersS7', 'bannersS8'));
    }
    
    

    public function cart()  {
        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->orderBy('id', 'DESC')
        ->get();

        $cartCollection = \Cart::getContent();
        // dd($cartCollection);
        return view('sitio.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection,'categorias'=>$categorias]);;
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('shop')->with('success_msg', 'Item is removed!');
        // return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request $request){
        // dd($request);
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->precio,
            'quantity' => $request->quantity ,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
        // return redirect()->route('shop')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', '"Actualizado correctamente!');
    }


    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'El Carrito está vacío!');
    }

    public function checkout() 
    {
       
        $cartCollection = \Cart::getContent();
        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->orderBy('id', 'DESC')
        ->get();
       

      

        // $checkout = \Cart::getContent();
        // dd($checkout);
        return view('sitio.checkout', compact('categorias','cartCollection'));


    }

    public function company(){
        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->orderBy('id', 'DESC')
        ->get();
        return view('sitio.company', compact('categorias'));
    }
    public function contact(){
        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->orderBy('id', 'DESC')
        ->get();
        return view('sitio.contact', compact('categorias'));
    }
    public function clientLogin(){
        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->orderBy('id', 'DESC')
        ->get();
        return view('sitio.login', compact('categorias'));
    }
    public function my_account(){

        $user = User::findOrFail(Auth::id());
       

        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->orderBy('id', 'DESC')
        ->get();
        $orders = Order::where('user_id','=', Auth::id())
        ->orderBy('id', 'DESC')
        ->get();
        return view('sitio.my_account', compact('categorias','orders','user'));
    }
    public function order_products(Request $request, $id ){
        $categorias = Categoria::whereNull('categorias_id')
        ->with(['children'])
        ->orderBy('id', 'DESC')
        ->get();
        $order = Order::findOrFail($id);
        $order_products = OrderProduct::where('order_id','=',$id)
        ->orderBy('id', 'DESC')
        ->get();
        return view('sitio.order_products', compact('categorias','order_products','order'));
    }
    public function enviarCorreo(Request $request)
    {

         
       
        $cartCollection = \Cart::getContent();
        $totalPrice = $cartCollection->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        // dd($cartCollection);


       // Crear un nuevo pedido
            $order = Order::create([
                'total_amount' => $totalPrice,
                'user_id' => Auth::id()
            ]);

            // Guardar los productos asociados al pedido
            foreach ($cartCollection as $productData) {
                // dd( $order->id);
                OrderProduct::create([
                    'sku' => 00,
                    'order_id' => $order->id, // Asignar el ID del pedido
                    'product_id' =>  $productData['id'], // Nombre del producto
                    'product_name' => $productData['name'], // Nombre del producto
                    'quantity' => $productData['quantity'], // Cantidad del producto
                    'price' => $productData['price'], // Precio del producto
                ]);
                
            }
        /////////////////////////////////////////


            
            $last_order = Order::findOrFail($order->id);
            $last_order_products = OrderProduct::where('order_id','=',$order->id)
            ->orderBy('id', 'DESC')
            ->get();


           
            $email = Auth::user()->email; 
            $destinatario = 'marks88martinez@gmail.com';
            
            // $datos = 'list'; // Datos que deseas pasar al correo electrónico
            Mail::to([$destinatario,$email])->send(new ClienteWeb($last_order, $last_order_products));

            // foreach (['marks88martinez@gmail.com'] as $recipient){
            //     // Mail::to($recipient)->send(new ClienteWeb() );
            // }    
            \Cart::clear();

            // if ($exito) {
                // Envía un mensaje de éxito a la sesión
            // session()->flash('success', 'El mensaje se ha almacenado correctamente.');
            // } else {
            //     // Envía un mensaje de error a la sesión
            //     session()->flash('error', 'Hubo un problema al intentar almacenar el mensaje.');
            // }
    
            // Redirecciona a la página anterior
            return response()->json(['success' => true]);
            // return redirect('/')->with('success', 'El mensaje se ha enviado correctamente.');
    }
    public function storeClientUser(Request $request)
    {
       
        $this->validate($request, [
            'email' => [
                'required',
                'email',
                'unique:users,email',
             ]
            ]);


           $user =  User::create([
            // 'name' => $request['name'],
            // 'email' => $request['email'],
            // 'password' => bcrypt($request['password']),

            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            // Asignar los valores de los campos adicionales
            'last_name' => $request['last_name'],
            'company' => $request['company'],
            'country' => $request['country'],
            'address' => $request['address'],
            'state' => $request['state'],
            'postal_code' => $request['postal_code'],
            'phone' => $request['phone'],
            'note' => $request['note'],
            'tipoUser' => $request['tipoUser'],
        ]);
        // Autenticar al usuario recién registrado
        Auth::login($user);

        return Redirect('/admin/users')->with('success','User creado con sucesso');

    }

}
