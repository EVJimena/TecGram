@extends('layouts.app')
@section('titulo')
Únete a TecGram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="w-6/12 p-5">
            <img class="rounded-3xl" src="{{asset ('img/main.jpg')}}" alt="Imagen de registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('cuenta.store')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="name">Nombre</label>
                    <input class="border p-1 w-full rounded-lg @error('name') border-red-500 @enderror" type="text" id="name" name="name" value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-600">{{$message}}</p>                        
                    @enderror
                </div>
                
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="username">Username</label>
                    <input class="border p-1 w-full rounded-lg @error('username') border-red-500 @enderror" type="text" id="username" name="username" value="{{old('username')}}">
                    @error('username')
                        <p class="text-red-600">{{$message}}</p>                        
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="email">Email</label>
                    <input class="border p-1 w-full rounded-lg @error('username') border-red-500 @enderror" type="text" id="email" name="email" value="{{old('email')}}">
                    @error('email')
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

                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="password_confirmation">Repetir password</label>
                    <input class="border p-1 w-full rounded-lg @error('username') border-red-500 @enderror" type="password" id="password_confirmation" name="password_confirmation">
                </div>

                <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold hover:bg-sky-700 cursor-pointer" type="submit" value="Crear cuenta">
            </form>
        </div>
    </div>
@endsection