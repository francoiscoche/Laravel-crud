@extends('app')

@section('content')
    <h1>Bienvenue sur mon blog</h1>
    <h2>Liste des derniers articles :</h2>
    <div class="grid grid-cols-3 gap-4">
        @forelse ($posts as $post)
            <div class="flex justify-center my-4">
                <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $post->title }}</h5>
                    <p>{{ $post->created_at }}</p>
                    <p class="text-gray-700 text-base mb-4">
                    {{ Str::limit($post->content, 80) }}
                    </p>
                    <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                </div>
            </div>
        @empty
            <span>Aucun post</span>
        @endforelse
    </div>
@endsection