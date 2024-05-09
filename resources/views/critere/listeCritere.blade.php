@extends('layouts.base')

@section('content')
<div class="bg-purple-200 min-h-screen flex items-center justify-center">
    <div class="w-3/4 bg-white p-4 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-black mb-4 text-center">CheckUni</h1>
        <a href="{{ url('home') }}" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring focus:border-red-400 float-left mb-4">
            Retour
        </a>
        <a href="{{ route('critere.createCritere') }}" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring focus:border-purple-400 float-right mb-4">
            Ajouter un critère
        </a>
        <br>
        <br>
        <br>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($notations as $items)
                    <div class="p-6">
                        <h2 class="text-lg font-semibold">{{ $items->critere }}</h2>
                        <div id="note-{{ $items->id }}" class="hidden text-sm text-gray-600 mt-2">{{ $items->note }}</div>
                        <div id="buttons-{{ $items->id }}" class="hidden flex justify-center items-center mt-2">
                            <a href="{{ route('critere.edit', $items->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring focus:border-blue-400 mr-2">Edit</a>
                            <form id="delete-form-{{ $items->id }}" action="{{ route('critere.delete', $items->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring focus:border-red-400">Delete</button>
                            </form>
                        </div>
                        <button class="absolute bottom-0 right-0 p-2" onclick="togglenote({{ $items->id }})">
                            <svg class="w-4 h-4 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M15.293 6.293a1 1 0 011.414 1.414l-7 7a1 1 0 01-1.414 0l-7-7a1 1 0 111.414-1.414L10 12.586l5.293-5.293a1 1 0 011.414 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function togglenote(id) {
        var note = document.getElementById('note-' + id);
        var buttons = document.getElementById('buttons-' + id);

        note.classList.toggle('hidden');
        buttons.classList.toggle('hidden');
    }
</script>
@endsection
