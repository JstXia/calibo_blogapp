@extends('layouts.app')

@section('title', 'Blog posts')

@section('content')
    <div class="section-head">
        <div>
            <p class="eyebrow">Stories &amp; ideas</p>
            <h1>Blog posts</h1>
        </div>
        <a class="button" href="{{ route('posts.create') }}">Write a post <span aria-hidden="true">&nbsp;+</span></a>
    </div>

    @if ($posts->isEmpty())
        <section class="paper empty">
            <h2>Your journal starts here.</h2>
            <p>Write your first post and it will appear on this page.</p>
            <a class="button" href="{{ route('posts.create') }}">Create your first post</a>
        </section>
    @else
        <div class="post-list">
            @foreach ($posts as $post)
                <article class="post-card">
                    <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                    <p class="meta">Published {{ $post->created_at->format('F j, Y') }}</p>
                    <p class="body-copy">{{ \Illuminate\Support\Str::limit($post->body, 240) }}</p>
                    <div class="actions">
                        <a class="button secondary" href="{{ route('posts.show', $post) }}">Read post</a>
                        <a class="button secondary" href="{{ route('posts.edit', $post) }}">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?')">
                            @csrf
                            @method('DELETE')
                            <button class="danger" type="submit">Delete</button>
                        </form>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="pagination">{{ $posts->links() }}</div>
    @endif
@endsection
