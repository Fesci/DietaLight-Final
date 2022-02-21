@extends('layouts.plantilla')
@section('title','Dieta Light PANEL')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-12">
		<h2 class="text-center tit">Crear dia de menu semanal</h2>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 text-center">
              @if(isset($menu)):
        	<input type="hidden" name="id" value="{{$menu->id}}">
            @endif
                <div class="col-6 offset-3">
                	<form action="{{route('menu.store')}}" method="POST" class="bg-light">
						@csrf 
                
                		<div class="form-group">
                			<label>Dia</label>
							<select name="dianombre">
							<option value ="Lunes">Lunes</option>
							<option value ="Martes">Martes</option>
							<option value ="Miercoles">Miercoles</option>
							<option value ="Jueves">Jueves</option>
							<option value ="Viernes">Viernes</option>
							<option value ="Sabado">Sabado</option>
                    	@error('dianombre')
						<br>
						<small>*{{$message }}</small>
						<br>	
						@enderror
							<input type="date" name="dianumero" id="dianumero" class="form-control text-center" placeholder="DiaNro<br />Dia" value="{{isset($menu->dianumero) ? $menu->dianumero : null}}">
							@error('dianumero')
							<br>
							<small>*{{$message }}</small>
							<br>	
							@enderror
						</div>
                		<div class="form-group">
                			<label>Almuerzo</label><br>
                			<textarea type="text" name="almuerzo" id="almuerzo" class="form-control text-center">{{old('almuerzo') }}</textarea>
							@error('almuerzo')
							<br>
							<small>*{{$message }}</small>
							<br>	
							@enderror
							
							<br>
                		</div>
						<div class="form-group">
							<label>Acompañamiento de Almuerzo</label><br>
							<textarea type="text" name="acompalmuerzo" id="acompalmuerzo" class="form-control text-center">{{old('acompalmuerzo') }}</textarea>
						</div>
                		<div class="form-group">
                			<label>Cena <br>
                			<textarea type="text" name="cena" id="cena" class="form-control text-center">{{old('cena')}}</textarea>
							@error('cena')
							<br>
							<small>*{{$message }}</small>
							<br>	
							@enderror
						</div>
						</label>
						<br>
						<div class="form-group">
							<label>Acompañamiento de cena</label><br>
							<textarea type="text" name="acompcena" id="acompcena" class="form-control text-center">{{old('acompcena')}}</textarea>
						</div>
                		<button type="submit" class="btn btn-success btn-lg">Crear</button>
                	</form>
                </div>

		</div>
	</div>
</div>

@endsection

