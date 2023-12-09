<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <a class="btn btn-primary" href="{{route('productos.crear')}}">Crear Nuevo producto</a>
         </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Codigo Producto</th>
            <th scope="col">descripcion</th>
            <th scope="col">precio</th>
            <th scope="col">stock</th>
            <th scope="col">pagaIsv </th>

          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($productos as $producto)


            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->stock}}</td>
            <td>{{$producto->pagaIsv}}</td>
             <td>



             </td>
            
           </tr>
          <tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
