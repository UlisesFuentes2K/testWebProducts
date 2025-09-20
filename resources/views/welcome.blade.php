<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bienvenida</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Bienvenidos a mi sitio web</h1>
  <p>Prueba técnica de conocimiento en Laravel 10</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4" style="width:100% ; margin:2%; display: flex; justify-content:center">
        <a href="{{ url('/product/index') }}" class="btn btn-primary" style="margin:2%;">Productos</a>
        <a href="{{ url('/login') }}" class="btn btn-primary" style="margin:2%;">Iniciar Sesión</a>
    </div>
  </div>
</div>
</body>
</html>