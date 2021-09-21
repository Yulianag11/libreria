@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')


<h1>Bienvenido a la seccion de los usuarios </h1>
<div class=" max-w-md  max-width: 28rem/* 448px */ bg-gray-300 mx-auto">
<div class="grid sm-grid-cols-1 md-grid-cols-2 lg-grid-cols-4 gap-4">
    @foreach($user as $user)
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
             <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$user->name}}</div>
                    <p class="mt-2 text-gray-500">una descripcion de ejemplo para rellenar con un poco de codigo hardcore, aguante informatica </p>
                    <a href="/user/{{$user->id}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Ver mas...</a>
                </div>
            </div>
         </div>
    @endforeach
</div>
</div>
@endsection

