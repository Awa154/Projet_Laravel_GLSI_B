<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-purple-200">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liste des Universités') }}
            </h2>
        </x-slot>

        <div class="w-full flex justify-center items-center">
            <div class="w-3/4 bg-gray p-4">
                <h1 class="text-2xl font-bold font-serif text-black flex justify-center items-center">Noter et Commenter Ici!</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    @foreach ($universites as $items)
                    <div class="relative bg-white rounded-lg overflow-hidden shadow-md max-w-md">
                        <div class="h-40 bg-cover bg-center" style="background-image: url('{{ $items->image_path }}')"></div>
                        <div class="p-6">
                            <h2 class="text-lg font-semibold">{{ $items->nom }}</h2>
                            <div id="contact-{{ $items->id }}" class="hidden text-sm text-gray-600 mt-2">{{ $items->contact }}</div>
                            <div id="buttons-{{ $items->id }}" class="hidden flex justify-center items-center mt-2">
                                <a href="{{ route('university.detail', $items->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring focus:border-blue-400 mr-2">Détail</a>
                            </div>
                            <button class="absolute bottom-0 right-0 p-2" onclick="togglecontact({{ $items->id }})">
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
    </x-app-layout>
    <script>
        function togglecontact(id) {
            var contact = document.getElementById('contact-' + id);
            var buttons = document.getElementById('buttons-' + id);

            contact.classList.toggle('hidden');
            buttons.classList.toggle('hidden');
        }
    </script>
</body>
</html>
