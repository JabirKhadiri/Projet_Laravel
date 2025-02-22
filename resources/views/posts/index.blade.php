@extends('layouts.app')

@section('content')
    <h1>Liste des articles</h1>
    @foreach ($posts as $post)
        <div>
            <h3><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
            <p>{{ Str::limit($post->content, 100) }}</p>
        </div>
    @endforeach
    {{ $posts->links() }}
@endsection
