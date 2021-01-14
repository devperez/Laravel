@extends('base')
@section('title', 'About Us | ' . config('app.name'))


@section('content')
    <img src="{{asset("img/avatar David PRZ.PNG")}}" class="my-12 h-80 rounded-full shadow-md" alt="avatar de David PRZ">
    <h2 class="mb-5 text-gray-700">Built with <span class="text-pink-500">&hearts;</span> by David PEREZ.</h2>

    <p>
        <a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
    </p>
@endsection