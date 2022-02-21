@extends('layouts.plantilla')

@section('title','Contacto')

@section('contenido')
<h1>Contacto</h1>
<form action="{{route('contacto.store')}}" method="POST">
@csrf
    <div class="form-group">
      <label for="">Nombre</label>
      <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese nombre">
      @error('nombre')
          <p><strong>{{$message}}</strong></p>
      @enderror
    </div>
    <div class="form-group">
      <label for="">E-mail</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingrese e-mail">
      @error('email')
      <p><strong>{{$message}}</strong></p>
  @enderror
    </div>
    <div class="form-group">
      <label for="">Consulta:</label>
      <textarea class="form-control" name="consulta" placeholder="Ingrese aqui su consulta..." rows="3"></textarea>
      @error('consulta')
      <p><strong>{{$message}}</strong></p>
  @enderror
    </div> 

        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
</form>
@if (session('exito'))
    <script>
      alert("{{ session('exito')}}");
    </script>
@endif
@endsection
