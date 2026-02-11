@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="bg-white p-6 rounded shadow">
    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="mb-4 w-full h-64 object-cover rounded">
    <h2 class="text-2xl font-bold">{{ $project->title }}</h2>
    <p class="mt-4">{{ $project->description }}</p>
    <a href="{{ route('projects.index') }}" class="text-blue-600 hover:underline mt-4 inline-block">Tillbaka till projekt</a>
</div>
@endsection
