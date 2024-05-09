@extends('layouts.base')
@section('content')
<div class="bg-gradient-to-r from-blue-400 to-purple-500 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-md">
        <h2 class="text-2xl font-bold mb-8 text-gray-800 text-center">Edit University </h2>
        <form class="space-y-4" action="{{ route('university.update', $universite->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-bold text-orange-500" for="nom">Nom</label>
                <input type="text" class="mt-1 block w-full border-2 border-orange-800 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-2  focus:ring-orange-600 indigo-500 focus:border-indigo-500 transition duration-300" id="nom" name="nom" value="{{ $universite->nom }}" placeholder="" required="">
            </div>
            <div>
                <label class="block text-sm font-bold text-orange-500" for="description">Description</label>
                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-2  focus:ring-orange-600 transition duration-300" id="description" name="description" value="{{ $universite->description }}" placeholder="" required="">
            </div>
            <div>
                <label class="block text-sm font-bold text-orange-500" for="image_path">Chemin de l'image</label>
                <input type="file" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-2  focus:ring-orange-600 transition duration-300" id="image_path" name="path" value="{{ $universite->image_path }}" placeholder="" required="">
            </div>
            <div>
                <label class="block text-sm font-bold text-orange-500" for="addresse">Addresse</label>
                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-2  focus:ring-orange-600 transition duration-300" id="addresse" name="addresse" value="{{ $universite->addresse }}" placeholder="" required="">
            </div>
            <div>
                <label class="block text-sm font-bold text-orange-500" for="contact">Contact</label>
                <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-2  focus:ring-orange-600 transition duration-300" id="contact" name="contact" value="{{ $universite->contact }}" placeholder="" required="">
            </div>
            <div class="flex justify-between mt-4">
                <button type="submit" class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
