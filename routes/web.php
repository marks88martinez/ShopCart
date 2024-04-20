<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\SubcategoriasController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\Sitio\HomeController;
use App\Http\Controllers\EmpresaController;


use App\Http\Controllers\CartController;


/*
|-----------------------bannerEliminar---------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('cliente.vistas.inicio');
// });
// Route::get('/trabajo', function () {
//     return view('cliente.vistas.producto');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false]);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('show/{id}', [HomeController::class, 'show']);
// Route::get('tratamientos/', [HomeController::class, 'allProducto']);
// Route::get('contactos/', [HomeController::class, 'contacto']);
// Route::get('categoria_prod/{id}', [HomeController::class, 'categoriaProd']);
// Route::get('nosotros/', function(){
//     return view('cliente.vistas.nosotros');
// });


Route::get('/', [HomeController::class, 'shop'])->name('shop');
// Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart.index');
Route::post('/add', [HomeController::class, 'add'])->name('cart.store');
Route::post('/update', [HomeController::class, 'update'])->name('cart.update');
Route::post('/remove', [HomeController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [HomeController::class, 'clear'])->name('cart.clear');

Route::get('/enviarCorreo', [HomeController::class, 'enviarCorreo'])->name('enviarCorreo');
// Route::view('/contact', 'sitio.contact')->name('contact');
// Route::view('/company', 'sitio.company')->name('company');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/company', [HomeController::class, 'company'])->name('company');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/client/login', [HomeController::class, 'clientLogin'])->name('client.login');

// Route::view('/client/login', 'sitio.login');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('product.detail');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/products/{id}', [HomeController::class, 'productsById'])->name('products.category');



Route::group(['middleware' => ['auth', 'tipoUser:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('users', UsersController::class);
    Route::resource('banners', BannersController::class);
    // Route::post('banner/bannerEliminar', 'BannersController@bannerEliminar');
    Route::post('banner/bannerEliminar/{id}', [BannersController::class, 'bannerEliminar'])->name('banner.bannerEliminar');
    Route::post('marca/marcaEliminar/{id}', [MarcasController::class, 'marcaEliminar'])->name('marca.marcaEliminar');
    Route::post('categoria/categoriaEliminar/{id}', [CategoriasController::class, 'categoriaEliminar'])->name('categoria.categoriaEliminar');
    Route::post('subcategoria/subcategoriaEliminar/{id}', [SubcategoriasController::class, 'subcategoriaEliminar'])->name('subcategoria.subcategoriaEliminar');

    Route::resource('orders',OrdersController::class);
    Route::resource('marcas', MarcasController::class);
    Route::resource('categorias', CategoriasController::class);
    Route::resource('subcategorias', SubcategoriasController::class);
    Route::resource('productos', ProductoController::class);
    Route::post('producto/imageEliminar/{id}', [ProductoController::class, 'imageEliminar'])->name('producto.imageEliminar');
    Route::post('producto/imagenTable/{id}', [ProductoController::class, 'imagenTable'])->name('producto.imagenTable');
    Route::patch('/order/update/{id}', [OrdersController::class, 'updateStatus'])->name('order.updateStatus');
    Route::resource('empresas', EmpresaController::class);

});

Route::post('/client/users', [HomeController::class, 'storeClientUser'])->name('client.users');

Route::group(['middleware' => ['auth', 'tipoUser:client'], 'prefix' => 'client', 'as' => 'client.'], function () {
    // Route::resource('users', UsersController::class);
    Route::get('/my_account', [HomeController::class, 'my_account'])->name('my_account');
    Route::put('/update/{id}', [UsersController::class, 'update'])->name('client.update');
   

    Route::get('/order_products/{id}', [HomeController::class, 'order_products'])->name('order_products');
});



// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
//     Route::resource('users', UsersController::class);
//     Route::resource('banners', BannersController::class);
//     // Route::post('banner/bannerEliminar', 'BannersController@bannerEliminar');
//     Route::post('banner/bannerEliminar/{id}', [BannersController::class, 'bannerEliminar'])->name('banner.bannerEliminar');
//     Route::post('marca/marcaEliminar/{id}', [MarcasController::class, 'marcaEliminar'])->name('marca.marcaEliminar');
//     Route::post('categoria/categoriaEliminar/{id}', [CategoriasController::class, 'categoriaEliminar'])->name('categoria.categoriaEliminar');
//     Route::post('subcategoria/subcategoriaEliminar/{id}', [SubcategoriasController::class, 'subcategoriaEliminar'])->name('subcategoria.subcategoriaEliminar');

//     Route::resource('marcas', MarcasController::class);
//     Route::resource('categorias', CategoriasController::class);
//     Route::resource('subcategorias', SubcategoriasController::class);
//     Route::resource('productos', ProductoController::class);
//     Route::post('producto/imageEliminar/{id}', [ProductoController::class, 'imageEliminar'])->name('producto.imageEliminar');
//     Route::post('producto/imagenTable/{id}', [ProductoController::class, 'imagenTable'])->name('producto.imagenTable');
// });

Route::any('{query}',
    function() { return redirect('/'); })
    ->where('query', '.*');
