<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link rel="icon" href="OIG8.jpg" type="image/jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            text-align: center;
            background-color: #f4e9e3; 
      }
      .container h1 {
            font-size: 60px;
        }
      
        .jumbotron {
            background-color: #976E64; 
            color: #fff; }

        .productos-container {
            background-color: #5D6D7E; 
            color: #fff;
            padding: 20px;}
        .table {
            background-color: #BFC9CA; 
        }
        
        .product button {
            background-color: #4B4746;
            color: #fff;
            padding: 10px 20px; 
            font-size: 16px; 
        }
        .product button:hover {
            background-color: #888;
        }

        .table th {
            background-color: #d2d2d2; 
}
        .btn-info, .btn-warning {
            background-color: #444; 
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center">
      <h1>Bienvenido a Nuestra Tienda de Ropa</h1>
      <p>Tu destino para la moda más actual y elegante.</p>
        </div>
    </div>

    <div class="container productos-container">
        <h2>Lista De Productos</h2>
        <table class="table">
            <thead>
                <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoria</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen</th>
      <th scope="col">precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Fecha-registro</th>
      <th scope="col" class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
@foreach($productos as $producto)
                        <tr>
   <th scope="row">1</th>
 <td>{{ $producto['nombre'] }}</td>
 <td>{{ $producto['categoria'] }}</td>
 <td>{{ $producto['descripcion'] }}</td>
    <td>
 <img style="height:50px" src="{{ $producto['imagen'] }}" alt="Imagen">
   </td>
       <td>{{ $producto['precio'] }}</td>
       <td>{{ $producto['stock'] }}</td>
       <td>{{ $producto['fecha-registro'] }}</td>

       <td class="text-center">
       
        <a href="{{ route('mostrar-producto',$producto['productoID']) }}"type="button" class="btn btn-info">Ver Producto</a>
        <a href="{{ route('mostrar-producto',$producto['productoID']) }}"type="button" class="btn btn-success">Comprar Ahora</a>
      

                            </td>
                    </tr>
                @endforeach
            </tbody>
            @include('sweetalert::alert')

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
