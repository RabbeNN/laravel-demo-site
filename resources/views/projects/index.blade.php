@extends('layouts.app')

@section('title', 'Projekt')

@section('content')
<h2 class="text-2xl font-bold mb-6">Projekt</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
    @foreach($projects as $project)
        <div class="bg-gray-800 p-4 rounded shadow max-w-md mx-auto">
            <img src="{{ asset('images/' . $project->image) }}" 
                 alt="{{ $project->title }}" 
                 class="w-full h-70 object-cover rounded">
            <h3 class="text-xl font-semibold mt-4">{{ $project->title }}</h3>
            <p class="mt-2">{{ $project->description }}</p>
            <a href="{{ route('projects.show', $project) }}" class="text-blue-600 hover:underline mt-2 inline-block">Se mer</a>
        </div>
    @endforeach
</div>
@endsection
