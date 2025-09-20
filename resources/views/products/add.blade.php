<!DOCTYPE html>
<html lang="en">
<head>
  <title>Agregar Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Agregar Producto Nuevo</h2><br>
  <div style="display: flex; justify-content:space-between; margin:0px 5px">
        <a href="{{ url('/product/index') }}" class="btn btn-success">Volver</a>
    </div><br>
  <form action="{{ url('product/save') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre" name="nombre">
    </div>
    <div class="mb-3">
      <label for="pwd">Descripción:</label>
      <input type="text" class="form-control" id="descripcion" placeholder="Ingrese la descripción del producto" name="descripcion">
    </div>
    <div class="mb-3">
      <label for="pwd">Precio</label>
      <input type="number" class="form-control" id="precio" placeholder="Ingrese el precio" name="precio">
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen del producto</label>
        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
