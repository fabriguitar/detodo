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
    <h2>Crear Productos</h2>
    <form method="POST" action="{{route('productos.guardar')}}">
        @csrf
        @method('POST')
        <div class="row">
    
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Another input placeholder">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" id="precio"  placeholder="Another input placeholder">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" id="stock"  placeholder="Another input placeholder">
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Paga isv</label>
        <select class="form-select" id="pagaIsv" name="pagaIsv" required>
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
      </div>

      <button  type="submit" >Guardar </button>
    </div>

    </form>
</body>
</html>
