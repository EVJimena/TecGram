@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="{{route('imagen.store')}}" method="POST" 
            enctype="multipart/form-data" id="dropzone" 
            class="dropzone border-dashed border-2 w-full 
            h-72 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 px-10 bg-white p-6 rounded-lg shadow-lg">
            <form action="{{ route('muro.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="titulo">Título</label>
                    <input class="border p-1 w-full rounded-lg @error('titulo') border-red-500 @enderror" type="text"
                        id="titulo" name="titulo" value="{{ old('titulo') }}" placeholder="Título de la publicación">
                    @error('titulo')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-gray-700 font-bold" for="descripcion">Descripción</label>
                    <textarea class="border p-1 w-full rounded-lg @error('descripcion') border-red-500 @enderror" type="text"
                        id="descripcion" name="descripcion" placeholder="Descripción de la publicación">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="hidden" name='imagen' value="{{old('imagen')}}">
                    @error('imagen')
                        <p class="text-red-600 my-2">{{ $message }}</p>
                    @enderror
                </div>

                <input class="bg-sky-600 text-white p-2 w-full rounded-lg font-bold hover:bg-sky-700 cursor-pointer"
                    type="submit" value="Crear publicación">

            </form>
        </div>
    </div>
@endsection
