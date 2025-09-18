<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield ('title' , 'Shop Cars')</title> 

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #200902ff, #110d02ff, #27240aff);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #c9c5c5ff;
    }
    .navbar {
      background: #111 !important;
      box-shadow: 0 2px 6px rgba(0,0,0,0.6);
    }
    .navbar-brand {
      font-size: 1.3rem;
      color: #b8b4b4ff !important;
    }
    .navbar .container {
      text-align: left; 
    }
    .form-control {
      background: #8b8888ff;
      border: 1px solid #161616ff;
      color: #f1f1f1;
    }
    .nav-link {
      transition: color 0.2s;
      color: #d1d1d1 !important;
    }
    .nav-link:hover {
      color: #0d6efd !important;
    }

    .card {
      border-radius: 1rem;
      box-shadow: 0 4px 15px rgba(0,0,0,0.5);
      border: none;
      background: #1e1e1e;
      color: #f1f1f1;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.7);
    }

    footer {
      background: #111;
      border-top: 1px solid #333;
      color: #aaa;
    }
    
  </style>

  @stack('css')
</head>
  <body>
    <nav class="navbar navbar-expand-lg border-bottom mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('home') }}">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV4TggoRtbiDQAIFHFvJHDwMshd58wvD-jcQ&s" alt="Logo Tienda Carros" class="rounded-circle me-2" width="40" height="40">
      Shop Cars
    </a> 
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navCarros">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navCarros">
      <ul class="navbar-nav ms-auto me-3">
        <li class="nav-item"><a class="nav-link fw-semibold" onclick="location.href='http://127.0.0.1:8000'">Inicio</a></li>
        <li class="nav-item"><a class="nav-link fw-semibold" onclick="location.href='http://127.0.0.1:8000/catalogo'">Catálogo de Carros</a></li> 
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar carros..." aria-label="Buscar">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<main class="container mb-5">@yield('content')</main>

<footer class="text-center py-4">
  <small>© 2025 · Demo Tienda de Carros · Laravel + PostgreSQL</small> 
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.min.js"></script>
@stack('js')
  </body>
</html>
   