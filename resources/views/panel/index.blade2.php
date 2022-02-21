@extends('layouts.plantilla')
@section('title','Dieta Light PANEL')
@section('contenido')
<h1>Parece que es el index de menu</h1>
<a href="{{route('panel.create')}}">Crear Menu</a>

@include('layouts.partials.home')