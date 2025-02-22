@extends('layouts.app')

@section('content')
    <h1>Créer un article</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Titre">
        <textarea name="content" placeholder="Contenu"></textarea>
        <button type="submit">Publier</button>
    </form>
@endsection
