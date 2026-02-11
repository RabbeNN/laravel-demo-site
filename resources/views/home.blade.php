@extends('layouts.app')

@section('title', 'Startsida')

@section('content')
<!-- Hero-sektion -->
<div class="relative bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 text-center">
        <h1 class="text-5xl font-extrabold mb-6">Välkommen till Webbyrå Demo</h1>
        <p class="text-xl mb-8 text-gray-300">Se exempelprojekt och modern design skapad med Laravel & Tailwind CSS.</p>
        <a href="{{ route('projects.index') }}" class="bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
            Se Projekt
        </a>
    </div>
</div>

<!-- Funktioner/Info-sektion -->
<div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-3 gap-10">
    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold mb-3 text-white">Modern Design</h3>
        <p class="text-gray-300">Responsiv och stilren design med Tailwind CSS, redo för alla skärmar.</p>
    </div>
    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold mb-3 text-white">Laravel Backend</h3>
        <p class="text-gray-300">Skapad med Laravel, migrations, seeders och Blade-komponenter för enkel hantering.</p>
    </div>
    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold mb-3 text-white">Snabb & Optimerad</h3>
        <p class="text-gray-300">Tailwind och Vite ger snabb laddning och smidigt arbetsflöde för utveckling.</p>
    </div>
</div>


<div class="bg-gray-800 py-16">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4 text-white">Redo att se projekten?</h2>
        <p class="text-gray-300 mb-6">Klicka nedan för att se exempelprojekt med riktiga bilder och layout.</p>
        <a href="{{ route('projects.index') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
            Visa Projekt
        </a>
    </div>
</div>
@endsection
