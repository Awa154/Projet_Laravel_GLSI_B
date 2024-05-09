<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CkeckUni</title>
    <!-- Tailwind CSS -->
    <link href="./output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-purple-100 flex justify-center items-center h-screen">
    <div class="bg-purple-200 p-8 rounded-lg shadow-md w-96">
        <h1 class="text-black text-2xl text-center font-semibold mb-4">CkeckUni</h1>
        <form action="{{ route('critere.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <i class="ri-lock-2-line"></i>
                <label for="critere" class="block text-black">Critere:</label>
                <input type="text" id="critere" placeholder="Entrer le critere de l'université" name="critere" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-purple-400" required="">
            </div>
            <div class="mb-4">
                <label for="note" class="block text-black">Note:</label>
                <input rows="5" id="note" placeholder="note" name="note" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-purple-400" required="">
            </div>
            <div class="flex justify-between mt-4">
                <button type="submit" class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                    Save
                </button>
                <a href="{{ route('critere_page') }}" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring focus:border-purple-400">
                    Afficher tout
                </a>
              </div>
        </form>
    </div>
</body>
</html>
