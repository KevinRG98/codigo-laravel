@extends('layout')

@section('title','Servicios')

@section('content')
  <h2>Servicios</h2>
  <ul>
      @if($servicios)
       @foreach($servicios as $item)
       <li>{{$item['titulo']}}</li>
       @endforeach
     @else
     <li> NO EXISTE NINGUN SERVICIO QUE MOSTRAR</li>
     @endif
</ul>

@endsection 