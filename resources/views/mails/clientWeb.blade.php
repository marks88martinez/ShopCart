<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos para el cuerpo del correo */
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.6;
        }
        /* Estilos para el encabezado */
        h3 {
            color: #333;
            font-size: 24px;
        }
        /* Estilos para los párrafos */
        p {
            margin-bottom: 10px;
        }
        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3>Perdidos Krishna</h3>
    <p><strong>Nombre: </strong> {{$user->name}}</p>
    <p><strong>Apellido: </strong>{{$user->last_name}}</p>
    <p><strong>Email: </strong>{{$user->email}}</p>
    <p><strong>Teléfono: </strong>{{$user->phone}}</p>
    <hr>
    <table>
        <thead>
            <tr>
                <th class="no">No</th>
                <th class="name">sku</th>
                <th class="date">Nombre</th>
                <th class="status">cantidad</th>
                <th class="status">precio</th>
                <th class="status">total</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach ($last_order_products as $index => $product)
           
            <tr>
                <td>{{$index + 1}}</td>
                <td>{{$product->sku}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->quantity}}</td>
                <td>$ {{$product->price}}</td>
                <td>$ {{$product->quantity *  $product->price}}</td>
            </tr>
            @endforeach
            <tr>
                <td class="text-left" colspan="5">total</td>
             
                <td>{{$last_order->total_amount}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
