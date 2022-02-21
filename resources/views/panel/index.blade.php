@extends('layouts.panel.layout')
@section('title','Dieta Light PANEL')
@section('contenido')

<div class="container">
      <div class="row">
          <div class="col-12">
            <h2 class="text-center tit">
              PANEL MENU DIETA LIGHT
            </h2>
          </div>
          <a href="{{route('panel.create')}}">Crear Menu</a>
          <div class="col-12">
            <table class="table table-bordered tabla">
              <thead>
                <tr>
                  <th scope="col" class="text-center">Dia</th>
                  <th scope="col" class="text-center">Almuerzo</th>
                  <th scope="col" class="text-center">Cena</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
              </thead>
                <tbody>
            
                  @foreach($menu as $m)
                  <tr>
                       <th scope="row" class="text-center">{{ $m->dianumero}}<br>{{ $m->dianombre}}</th>
                        <td class="text-center">{{ $m->almuerzo}}<br>{{ $m->acompalmuerzo}}</td>
                        <td class="text-center">{{ $m->cena}}<br>{{ $m->acompcena}}</td>
                          <td class="text-center">
                            <form action="{{route("panel.destroy", $m)}}" method="POST">
                                @method('delete')
                                @csrf
                              <div class="btn-group">
                                <a href="{{route("panel.edit", $m)}}" class="btn btn-success btn-sm">Editar</a>
                                <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                              </div>
                            </form>
                          </td>
                      </tr>
    
                 @endforeach
    
              </tbody>
    
            </table>
    
            </div>
    
          </div>
    
        </div>
    
@endsection