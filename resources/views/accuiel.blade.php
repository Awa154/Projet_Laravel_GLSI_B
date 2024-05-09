<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CheckUni</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e2e8f0; /* Bleu clair pour l'arrière-plan */
        }

        .navbar {
            background-color: #B794F4; /* Violet clair pour la barre de navigation */
        }
    </style>
</head>
<body class="antialiased">
    <div class="navbar py-4 flex justify-between items-center">
        <div class="ml-6 font-bold font-serif text-black">
            CheckUni
        </div>
        <div class="mr-6">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('home') }}" class="text-white font-semibold px-4 py-2 rounded-lg bg-purple-500 hover:bg-purple-600">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-white font-semibold px-4 py-2 rounded-lg bg-purple-500 hover:bg-purple-600">Log in</a>
                @endif
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-white font-semibold px-4 py-2 rounded-lg bg-purple-500 hover:bg-purple-600">Register</a>
            @endif
        </div>
    </div>

    <div class="w-full flex justify-center items-center">
        <div class="w-3/4 bg-gray p-4">
            <h1 class="text-2xl font-bold font-serif text-black flex justify-center items-center">Bienvenue sur CheckUni!</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                @foreach ($universites as $items)
                <div class="relative bg-white rounded-lg overflow-hidden shadow-md max-w-md">
                    <div class="h-40 bg-cover bg-center" style="background-image: url('{{ $items->image_path }}')"></div>
                    <div class="p-6">
                        <h2 class="text-lg font-semibold">{{ $items->nom }}</h2>
                        <div id="contact-{{ $items->id }}" class="hidden text-sm text-gray-600 mt-2">{{ $items->contact }}</div>
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

    <script>
        function togglecontact(id) {
            var contact = document.getElementById('contact-' + id);
            contact.classList.toggle('hidden');
        }
    </script>
</body>
</html>
