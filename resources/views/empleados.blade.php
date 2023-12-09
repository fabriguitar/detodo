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
            <a class="btn btn-primary" href="{{route('empleados.crear')}}">Crear Nuevo Empleado</a>
         </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Codigo Prestamo</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">fechaingreso</th>
            <th scope="col">Salario</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($empleados as $producto)


            <th scope="row">{{$empleado->idprestamo}}</th>
            <td>{{$empleado->descripcion}}</td>
            <td>{{$empleado->apellido}}</td>
             <td>{{$empleado->fechaingreso}}</td>
            <td>{{$empleado->salario}}</td>
             <td>



             </td>

           </tr>
          <tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
