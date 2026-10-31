@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <a class="back-link" href="{{ route('posts.index') }}">← Back to all posts</a>
    <article class="paper">
        <p class="eyebrow">Journal entry</p>
        <h1>{{ $post->title }}</h1>
        <p class="meta">Published {{ $post->created_at->format('F j, Y') }}</p>
        <div class="body-copy">{{ $post->body }}</div>
        <hr style="border: 0; border-top: 1px solid #e8e8e1; margin: 28px 0 20px;">
        <div class="actions">
            <a class="button" href="{{ route('posts.edit', $post) }}">Edit post</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?')">
                @csrf
                @method('DELETE')
                <button class="danger" type="submit">Delete</button>
            </form>
        </div>
    </article>
@endsection
