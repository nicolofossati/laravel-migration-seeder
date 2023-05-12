@extends('layouts.app')

@section('nome-pagina') 
Migration - HomePage
@endsection

@section('content') 

@foreach ($trains as $key=>$train)
    <h1>Treno {{$key}}</h1>
    <p>Agenzia: {{$train['agency']}}</p>
    <p>Partenza: {{$train['departure_station']}}</p>
    <p>Arrivo: {{$train['arrival_station']}}</p>
@endforeach

@endsection
