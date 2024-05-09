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
        <form action="{{ route('university.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <i class="ri-lock-2-line"></i>
                <label for="nom" class="block text-black">Nom:</label>
                <input type="text" id="nom" placeholder="Entrer le nom de l'université" name="nom" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-purple-400" required="">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-black">description:</label>
                <input rows="5" id="description" placeholder="Description" name="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-purple-400" required="">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image_path"> Chemin de l'image:
                </label>
                <input type="file" name="image_path" id="image_path" multiple class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-purple-400" placeholder="Chemin de l'image de l'université">
            </div>
            <div class="mb-4">
                <label for="addresse" class="block text-black">Addresse:</label>
                <input type="text" id="addresse" placeholder="Addresse de l'université" name="addresse" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-purple-400" required="">
            </div>
            <div class="mb-4">
                <label for="contact" class="block text-black">Contact:</label>
                <input type="text" id="contact" placeholder="Contact de l'université" name="contact" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-purple-400" required="">
            </div>
            <div class="flex justify-between mt-4">
                <button type="submit" class="flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                    Save
                </button>
                <a href="{{ route('university_page') }}" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring focus:border-purple-400">
                    Afficher tout
                </a>
              </div>
        </form>
    </div>
</body>
</html>
