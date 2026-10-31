@extends('layouts.app')

@section('title', 'Edit post')

@section('content')
    <a class="back-link" href="{{ route('posts.show', $post) }}">← Back to post</a>
    <p class="eyebrow">Update story</p>
    <h1>Edit post</h1>
    <p class="intro">Make changes to “{{ $post->title }}”.</p>

    <form class="paper" action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        @include('posts._form', ['submitLabel' => 'Save changes'])
    </form>
@endsection
