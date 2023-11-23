@extends('layout.principal')

@section('contenido')
    <img class="imagen-principal" src="assets/imagen-principal.jpg" alt="">
    <div class="parent">
            <br>
            <h1>{{$title}}</h1>
            <hr />
    <ul>
        @foreach ($users as $user)
            <li>{{$user->nombre}}</li>
        @endforeach


    </ul>
    </div>

@endsection