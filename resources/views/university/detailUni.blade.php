@extends('layouts.base')
@section('content')
<div class="flex h-screen justify-center items-center">
    <div class="w-3/4 bg-purple-300 p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center mb-4">{{ $universite->nom }}</h1>
        <h2 class="text-sm font-bold text-right text-gray-500">{{ $universite->addresse }}</h2>
        <div class="flex justify-center items-center my-4">
            <img src="{{ $universite->image_path }}" alt="Image de l'université" class="w-40 h-40 object-cover rounded-lg">
        </div>
        <p class="text-center">{{ $universite->description }}</p>
        <div class="flex justify-center items-center mt-4">
            <a href="{{ url('home') }}" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md mr-2">
                Retour
            </a>
            <a href="{{ url('home') }}" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-md mr-2">
                Commenter
            </a>
            <a href="{{ route('notation.addNote', $universite->id) }}"  class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md mr-2">
                Noter
            </a>
        </div>
    </div>
</div>
@endsection
