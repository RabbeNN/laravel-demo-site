<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Webbyrå Demo</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-gray-900 text-white font-sans">
    <header class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/')}}" class="text-xl font-bold">Webbyrå Demo</a>
            <nav>
                <a href="{{ url('/') }}" class="mr-4 hover:underline">Startsida</a>
                <a href="{{ route('projects.index') }}" class="hover:underline">Projekt</a>
            </nav>

        </div>
    </header>

    <main class="flex-grow container mx-auto my-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-10">
        <div class="container mx-auto text-center">
            &copy; 2026 Webbyrå Demo
        </div>
    </footer>
</body>
</html>
