<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <link href="./output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
</head>
<body class="bg-purple-100">
    <div class="flex h-screen rounded-lg">
        <div class="w-1/4 bg-purple-400 text-white p-4">
            <br>
            <br>
            <h1 class="text-2xl font-bold text-black-50 flex justify-center items-center">Admin Dashboard</h1>
            <br>
            <br>
            <div class="mr-6 grid place-items-center" >
                <a href="{{ route('university_page') }}" class="py-2 px-4 rounded-lg bg-purple-500 hover:bg-purple-600 text-white"> Université</a>
                <br>
                <a href="{{ url('home') }}" class="py-2 px-4 rounded-lg bg-purple-500 hover:bg-purple-600 text-white">Notaion</a>
                <br>
                <a href="{{ route('critere_page') }}" class="py-2 px-4 rounded-lg bg-purple-500 hover:bg-purple-600 text-white">Critère</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-3/4 bg-white p-4">
            <h1 class="text-2xl font-bold font-serif text-black flex justify-center items-center">CheckUni</h1>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Statistiques') }}
                    </h2>
                </x-slot>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                            {{ __("Vous avez 3 établissement enregistrer") }}
                        </div>
                    </div>
                </div>
            </x-app-layout>
        </div>
    </div>
</body>
</html>
