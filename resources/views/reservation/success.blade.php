@extends('layouts.template')

@section('content')
    <div class="grid grid-cols-1 place-items-center mt-8 mb-4">
        <h1 class="text-purple-800 text-3xl font-bold text-center mb-4">Guardado satisfactoriamente</h1>
        <img src="{{ asset('images/success-dog.jpg') }}" alt="Success Dog" class="mb-4">
        <a href="{{ route('reservation') }}" class="text-purple-800 text-xl text-center">Volver a reservación</a>
    </div>
@endsection