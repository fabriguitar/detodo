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
    <h2>Crear Pelicula</h2>
    <form method="POST" action="{{route('pelicula.guardar')}}">
        @csrf
        @method('POST')
        <div class="row">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Codigo Pelicula</label>
        <input type="text" class="form-control" name="codigoPelicula" id="codigoPelicula" placeholder="Example input placeholder">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Another input placeholder">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Anyo Debut</label>
        <input type="text" class="form-control" name="anyoDebut" id="anyoDebut"  placeholder="Another input placeholder">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Duracion</label>
        <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Another input placeholder">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Genero</label>
        <input type="text" class="form-control" name="genero" id="genero" placeholder="Another input placeholder">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Productor</label>
        <input type="text" class="form-control" name="productor" id="productor" placeholder="Another input placeholder">
      </div>
      <button  type="submit" >Guardar </button>
    </div>

    </form>
</body>
</html>
