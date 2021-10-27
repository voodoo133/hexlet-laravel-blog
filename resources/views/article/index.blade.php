@extends('layouts.app')

@section('title', 'Список статей')
@section('header', 'Список статей')

@section('content')
    @if (Session::has('status'))
        <p class="alert alert-success">{{ Session::get('status') }}</p>
    @endif
    @foreach ($articles as $article)
        <h2>
            <a href="{{ route('articles.show', $article) }} ">{{ $article->name }}</a><br>
            <small><a href="{{ route('articles.edit', $article) }}">Update</a></small>
            <small><a href="{{ route('articles.destroy', $article) }}" data-method="delete" rel="nofollow">Delete</a></small>
        </h2>
        <div>{{ Str::limit($article->body, 200) }}</div>
    @endforeach
    {{ $articles->links() }}
@endsection