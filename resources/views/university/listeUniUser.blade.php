@extends('layouts.base')

@section('content')
<div class="bg-purple-200 min-h-screen flex items-center justify-center">
    <div class="w-3/4 bg-white p-4 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-black mb-4 text-center">CheckUni</h1>
        <table class="w-full bg-blue-100 rounded-lg">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b-2 border-gray-700 font-bold">Nom</th>
                    <th class="px-4 py-2 border-b-2 border-gray-700 font-bold">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($universites as $items)
                    <tr>
                        <td class="border px-4 py-2">{{ $items->nom }}</td>
                        <td class="border px-4 py-2">{{ $items->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
