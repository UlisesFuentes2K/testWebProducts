<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/2.3.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body class="bg-light" style="margin:2% 8%">

    <div style="display: flex; justify-content:space-between; margin:0px 5px">
        <h2 class="page-title">Listado de Productos</h2><br>
        <a href="{{ url('/') }}" class="btn btn-success">Volver Home</a>
    </div><br>
  <div style="display: flex; justify-content:space-between; margin:0px 5px">
    <a href="{{ url('/product/add') }}" class="btn btn-primary">Agregar</a>
  </div>
  <br>
  <div class="table-container">
    <table id="myTable" class="table table-bordered table-striped w-75">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Categoría</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Producto A</td>
          <td>$10</td>
          <td>Informática</td>
          <td>
            <div>
                <a href="{{ url('/product/delete') }}" class="btn btn-danger">Eliminar</a>
                <a href="{{ url('/product/edit') }}" class="btn btn-warning">Editar</a>
            </div>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Producto B</td>
          <td>$20</td>
          <td>Electrónica</td>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.3.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.bootstrap5.min.js"></script>

<script>
  let table = new DataTable('#myTable');
</script>
</body>
</html>
