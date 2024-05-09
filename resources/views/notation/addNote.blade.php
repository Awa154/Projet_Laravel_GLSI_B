@extends('layouts.base')
@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold text-center mb-4">Noté l'université {{ $universite->nom }}</h1>
    <h2 class="text-lg font-bold mb-2">Critères</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-center items-center">
            <h3 class="text-xl font-semibold mb-2">Infrastructure</h3>
            <div>
                <input type="checkbox" id="infrastructure_star1" name="infrastructure_star1" value="1">
                <label for="infrastructure_star1">★</label>
                <input type="checkbox" id="infrastructure_star2" name="infrastructure_star2" value="2">
                <label for="infrastructure_star2">★</label>
                <input type="checkbox" id="infrastructure_star3" name="infrastructure_star3" value="3">
                <label for="infrastructure_star3">★</label>
                <input type="checkbox" id="infrastructure_star4" name="infrastructure_star4" value="4">
                <label for="infrastructure_star4">★</label>
                <input type="checkbox" id="infrastructure_star5" name="infrastructure_star5" value="5">
                <label for="infrastructure_star5">★</label>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-center items-center">
            <h3 class="text-xl font-semibold mb-2">Qualité d'enseignement</h3>
            <!-- Insérer les étoiles pour la qualité d'enseignement -->
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-center items-center">
            <h3 class="text-xl font-semibold mb-2">Recherche</h3>
            <!-- Insérer les étoiles pour la recherche -->
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 flex flex-col justify-center items-center">
            <h3 class="text-xl font-semibold mb-2">Convivialité</h3>
            <!-- Insérer les étoiles pour la convivialité -->
        </div>
    </div>
    <br>
    <div class="flex justify-center items-center mt-4">
        <a href="{{ url('university.detail') }}" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md mr-2">
            Retour
        </a>
        <a href="{{ url('home') }}" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-md mr-2">
            Save
        </a>
    </div>

</div>
@endsection

