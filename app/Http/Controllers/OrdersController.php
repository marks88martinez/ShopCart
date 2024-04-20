<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $search =  $request->input('search');

            if ( $request->search) {
        
                // $order = Order::where('name','like','%'.$search.'%')->orderBy('id','desc')->paginate(20);
            }else{
                // $categorias = Categoria::whereNull('categorias_id')->get();
        
                $orders = Order::orderBy('id','desc')->paginate(10);
            }
        return view('orders.index',compact('orders'));


    }
    public function updateStatus(Request $request, $id)
    {
        // Encuentra el pedido por su ID
        $order = Order::findOrFail($id);

        // Actualiza el estado del pedido (por ejemplo, alternar entre completado y pendiente)
        $order->status = !$order->status;

        // Guarda los cambios en la base de datos
        $order->save();

        // Redirige de vuelta a la página anterior o a donde desees
        return redirect()->back()->with('success', 'Status updated successfully');
    }
    
}
