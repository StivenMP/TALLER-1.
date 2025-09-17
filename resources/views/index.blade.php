@extends('layouts.app')
@section('title','Inicio')
@section('content')
<div class="container my-5">
  <div class="row text-center">
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://p4.wallpaperbetter.com/wallpaper/659/473/256/not-sure-white-sports-car-wallpaper-preview.jpg" 
             class="card-img-top" 
             alt="Carro Deportivo"
             style="height: 220px; object-fit: cover; border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-bold">Carro Deportivo</h5>
          <p class="card-text">Un carro veloz con diseño moderno, ideal para quienes buscan adrenalina y estilo.</p>
          <a href="#" class="btn btn-primary mt-auto w-100">🚀 Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://cdn.prod.website-files.com/5ec85520c4dfff034b036be2/665e0831da52386a875ea59d_best-hybrid-suv_highlander.webp" 
             class="card-img-top" 
             alt="SUV Familiar"
             style="height: 220px; object-fit: cover; border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-bold">SUV Familiar</h5>
          <p class="card-text">Espacio y comodidad para toda la familia, perfecto para viajes largos.</p>
          <a href="#" class="btn btn-primary mt-auto w-100">🚗 Comprar</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm border-0">
        <img src="https://i.blogs.es/707e5c/audi-e-tron/650_1200.jpg" 
             class="card-img-top" 
             alt="Carro Eléctrico"
             style="height: 220px; object-fit: cover; border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title fw-bold">Carro Eléctrico</h5>
          <p class="card-text">Tecnología limpia y eficiente, cuida el medio ambiente sin perder potencia.</p>
          <a href="#" class="btn btn-primary mt-auto w-100">⚡ Comprar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border-radius: 1rem;
    background: #1e1e1e; /* fondo oscuro */
    color: #f1f1f1;       /* texto claro */
  }
  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.35);
  }
  .card-title {
    color: #ffffff; /* títulos más blancos */
  }
  .card-text {
    color: #dcdcdc; /* texto más claro */
  }
</style>
@endsection
