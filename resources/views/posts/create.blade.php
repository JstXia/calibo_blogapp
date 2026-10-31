@extends('layouts.app')

@section('title', 'Write a post')

@section('content')
    <a class="back-link" href="{{ route('posts.index') }}">← Back to all posts</a>
    <p class="eyebrow">New story</p>
    <h1>Write a post</h1>
    <p class="intro">Give your idea a title, then tell the story.</p>

    <form class="paper" action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts._form', ['post' => null, 'submitLabel' => 'Publish post'])
    </form>
@endsection
