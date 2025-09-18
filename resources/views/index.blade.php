@extends('layouts.app')
@section('title','Inicio')
@section('content')

<div class="container my-5 text-light">
  <div class="row align-items-center mb-5">
    <div class="col-lg-6 text-center text-lg-start">
      <h2>Bienvenido</h2>
      <h1 class="fw-bold mb-3">Tu tienda de carros de confianza</h1>
      <p class="text-light-50 mb-4">
        En nuestra tienda encontrarás la mejor selección de autos usados y nuevos. 
        Precios justos, financiación y garantía para que tu compra sea segura y sin complicaciones.
      </p>
    </div>
    <div class="col-lg-6 mt-4 mt-lg-0">
      <div class="card bg-dark text-light shadow border-0">
        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1200&q=60" 
             class="card-img-top rounded-top"
             alt="Carro de inicio"
             style="height: 260px; object-fit: cover;">
        <div class="card-body text-center">
          <h5 class="fw-bold mb-1">La mejor experiencia en compra y venta</h5>
          <p class="text-secondary mb-0">Transparencia · Confianza · Seguridad</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row text-center">
    <div class="col-md-4 mb-4">
      <div class="card h-100 bg-dark text-light shadow border-0">
        <div class="card-body">
          <h5 class="fw-bold">Variedad de modelos</h5>
          <p class="text-secondary">Encuentra autos familiares, deportivos, compactos y SUV en un solo lugar.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 bg-dark text-light shadow border-0">
        <div class="card-body">
          <h5 class="fw-bold">Financiación fácil</h5>
          <p class="text-secondary">Opciones de crédito rápidas y seguras para que estrenes carro sin preocupaciones.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100 bg-dark text-light shadow border-0">
        <div class="card-body">
          <h5 class="fw-bold">Garantía real</h5>
          <p class="text-secondary">Todos nuestros vehículos pasan por inspecciones técnicas y cuentan con garantía.</p>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center text-secondary py-4 mt-5 border-top border-secondary">
    © 2025 · Tienda de Carros • SrSriv
  </footer>
</div>

@endsection
