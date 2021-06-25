@extends('layouts.plantilla')

@section('title','Personas')

@section('content')

    <ul>
        @foreach($personas as $persona)
            <li>{{$persona->idpersona}}</li>
            <li>{{$persona->tipopersona}}</li>
            <li>{{$persona->nombre}}</li>
            <li>{{$persona->tipodocumento}}</li>
            <li>{{$persona->numerodocumento}}</li>
            <li>{{$persona->direccion}}</li>
            <li>{{$persona->telefono}}</li>
            <li>{{$persona->email}}</li>
            <li>{{$persona->created_at}}</li>

            {{$personas->links()}}
        @endforeach
    </ul>

@endsection


