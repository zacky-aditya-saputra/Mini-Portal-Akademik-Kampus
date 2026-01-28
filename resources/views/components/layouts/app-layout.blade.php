<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portal Akademik' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white shadow-lg">
        <div class="container mx-auto">
            <h1 class="text-xl font-bold">Mini Portal Akademik</h1>
        </div>
    </nav>

    <main class="container mx-auto py-8 px-4">
        {{ $slot }}
    </main>

</body>

</html>
