@extends('base')
@section('title', 'About Us | ' . config('app.name'))


@section('content')

    <p>Built with &hearts; by David PEREZ.</p>

    <p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>
@endsection