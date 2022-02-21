@extends('layouts.plantilla')
@section('title','Dieta Light PANEL')
@section('contenido')
<h1>Parece que es el index de menu</h1>
<a href="{{route('menu.create')}}">Crear Menu</a>

@include('layouts.partials.home')