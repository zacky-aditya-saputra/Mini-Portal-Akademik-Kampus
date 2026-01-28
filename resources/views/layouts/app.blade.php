<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Portal Akademik</title>
</head>
<body>
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-xl font-bold">Mini Portal Akademik</h1>
        </div>
    </nav>

    <main class="container mx-auto py-8">
        @yield('content') {{  }}
    </main>
</body>
</html>