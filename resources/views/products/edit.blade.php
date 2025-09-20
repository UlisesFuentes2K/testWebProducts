<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar Producto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Editar Producto</h2><div style="display: flex; justify-content:space-between; margin:0px 5px">
        <a href="{{ url('/product/index') }}" class="btn btn-success">Volver</a>
    </div><br>
  <form action="{{ url('product/update', $producto->idProduct) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control" 
                value="{{ $producto->nombre }}" required>
      </div>

      <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción</label>
          <input type="text" name="descripcion" id="descripcion" class="form-control" 
                value="{{ $producto->descripcion }}">
      </div>

      <div class="mb-3">
          <label for="precio" class="form-label">Precio</label>
          <input type="number" name="precio" id="precio" class="form-control" 
                value="{{ $producto->precio }}" required>
      </div>

      <div class="mb-3">
          <label for="imagen" class="form-label">Imagen</label>
          <input type="file" name="imagen" id="imagen" class="form-control">
          @if($producto->imagen)
              <p>Imagen actual:</p>
              <img src="{{ asset('storage/'.$producto->imagen) }}" width="120">
          @endif
      </div>

      <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
</div>

</body>
</html>
