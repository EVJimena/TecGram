@extends('layouts.app')
@section('titulo')
Iniciar sesión
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="w-6/12 p-5">
            <img class="rounded-3xl" src="{{asset ('img/main.jpg')}}" alt="Imagen de login de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <form action="{{route('login.store')}}" method="POST">
                @csrf      
                @if (session('mensaje'))
                    <p class="text-red-700 my-2">{{session('mensaje')}}</p>
                @endif                          
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="username">Username</label>
                    <input class="border p-1 w-full rounded-lg @error('username') border-red-500 @enderror" type="text" id="username" name="username" value="{{old('username')}}">
                    @error('username')
                        <p class="text-red-600">{{$message}}</p>                        
                    @enderror
                </div>                

                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="password">Password</label>
                    <input class="border p-1 w-full rounded-lg @error('username') border-red-500 @enderror" type="password" id="password" name="password">
                    @error('password')
                        <p class="text-red-600">{{$message}}</p>                        
                    @enderror
                </div>                

                <div class="mb-3">
                    <input type="checkbox" name="remember" id="remember">
                    <label class="text-gray-700" for="remember">Recordarme</label>
                </div>

                <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold hover:bg-sky-700 cursor-pointer" type="submit" value="Iniciar sesion">
            </form>
        </div>
    </div>
@endsection