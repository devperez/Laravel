@extends('base')
@section('title', 'About Us | ' . config('app.name'))


@section('content')
    <img src="{{asset("img/avatar David PRZ.PNG")}}" height="150px" alt="avatar de David PRZ">
    <p>Built with &hearts; by David PEREZ.</p>

    <p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>
@endsection