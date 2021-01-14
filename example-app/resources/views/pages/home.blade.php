@extends('base')

@section('content')
<img src="{{asset("img/Blason_ville_fr_Montcuq_46.svg.png")}}" class="h-80 rounded mt-12" alt="Blason du village de Montcuq">
    <h1 class="mt-5 sm:text-5xl text-3xl font-semibold text-indigo-600">Bonjour de Montcuq !</h1>

    <p class="text-lg text-gray-800">Il est exactement {{date('H:i')}}.</p>
@endsection