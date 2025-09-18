@extends('layouts.app')
@section('title','Inicio')
@section('content')

<div class="row justify-content-center my-5">
  <div class="col-lg-6">
    <div class="card shadow-lg border-0 rounded-4">
      <div class="card-body p-5">
        
        <h2 class="h4 mb-4 text-center fw-bold text-primary">
          📝Datos de Compra
        </h2>

        @if($errors->any())
        <div class="alert alert-danger rounded-3">
          <strong>Revisa los campos:</strong>
          <ul class="mb-0">
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form method="post" action="">
          @csrf
          <div class="mb-3">
            <label class="form-label fw-semibold">Nombre</label>
            <input type="text" name="nombre" class="form-control rounded-3" 
                   value="{{ old('nombre') }}" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Apellido</label>
            <input type="text" name="apellido" class="form-control rounded-3" 
                   value="{{ old('apellido') }}" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Correo Gmail</label>
            <input type="email" name="gmail" class="form-control rounded-3" 
                   value="{{ old('gmail') }}" placeholder="ejemplo@gmail.com" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Teléfono</label>
            <input type="tel" name="telefono" class="form-control rounded-3" 
                   value="{{ old('telefono') }}" placeholder="+57 300 000 0000" required>
          </div>

          <div class="mb-4">
            <label class="form-label fw-semibold">Ciudad</label>
            <input type="text" name="ciudad" class="form-control rounded-3" 
                   value="{{ old('ciudad') }}" required>
          </div>

          <div class="d-grid">
            <button class="btn btn-primary btn-lg rounded-3 fw-bold">
              🚗 Terminar compra
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
