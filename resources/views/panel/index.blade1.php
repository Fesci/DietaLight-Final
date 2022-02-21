@extends('layouts.plantilla')
@section('title','Dieta Light PANEL')
@section('contenido')
<h1>Parece que es el index de menu</h1>
<a href="{{route('menu.create')}}">Crear Menu</a>

<ul>
    @foreach ($menu as $m)
        <li>
            <a href="{{route('menu.show',$m->id)}}">{{ $m -> dianombre}}</a>
        </li>
    @endforeach

    {{$menu->links()}}
    @endsection
    
</ul>
