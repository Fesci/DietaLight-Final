@extends('layouts.plantilla')
@section('title','Dieta Light PANEL')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-12">
		<h2 class="text-center tit">Editar dia de menu semanal</h2>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 text-center">
          
              @if(isset($menu))
            
        	<input type="hidden" name="id" value="{{$menu->id}}">
        	
            @endif
            
                <div class="col-6 offset-3">
                	<form action="{{route('menu.update',$menu)}}" method="POST" class="bg-light">
						@csrf 
                        @method('put')
                        <div class="form-group">
                        <label>ID Dia (orden de numero en la semana)</label>
                        <input type="text" name="id" id="id" class="form-control text-center" value="{{isset($menu->id) ? $menu->id : null }}">
                        </div>
                		<div class="form-group">
                		<label>Dia</label>
						<input type="text" name="dianombre" id="dianombre" class="form-control text-center" placeholder="Nombre dia" value="{{old('dianombre',$menu->dianombre)}}">
                    	@error('dianombre')
						<br>
						<small>*{{$message }}</small>
						<br>	
						@enderror
						<input type="date" name="dianumero" id="dianumero" class="form-control text-center" placeholder="DiaNro<br />Dia" value="{{old('dianumero',$menu->dianumero) }}">
						@error('dianumero')
						<br>
						<small>*{{$message }}</small>
						<br>	
						@enderror
					</div>
                		<div class="form-group">
                			<label>Almuerzo</label>
                			<textarea type="text" name="almuerzo" id="almuerzo" class="form-control text-center">{{old('almuerzo', $menu->almuerzo)}}</textarea>
                        <div class="form-group">
                                <label>Acompañamiento de Almuerzo</label><br>
                                <textarea type="text" name="acompalmuerzo" id="acompalmuerzo" class="form-control text-center">{{old('acompalmuerzo',$menu->acompalmuerzo)}}</textarea>
                        </div>
                		</div>
                		<div class="form-group">
                			<label>Cena</label>
							<br>
                			<textarea type="text" name="cena" id="cena" class="form-control text-center">{{old('cena',$menu->cena)}}</textarea>
                		</div>
                        <div class="form-group">
							<label>Acompañamiento de cena</label><br>
							<textarea type="text" name="acompcena" id="acompcena" class="form-control text-center">{{old('acompcena',$menu->acompcena)}}</textarea>
						</div>
                		<button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                	</form>
                </div>

		</div>
	</div>
</div>

@endsection

