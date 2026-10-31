<div class="field">
    <label for="title">Title</label>
    <input id="title" type="text" name="title" value="{{ old('title', $post?->title) }}" maxlength="255" required autofocus>
    @error('title')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="field">
    <label for="body">Body</label>
    <textarea id="body" name="body" required>{{ old('body', $post?->body) }}</textarea>
    @error('body')
        <p class="error">{{ $message }}</p>
    @enderror
</div>

<div class="actions">
    <button type="submit">{{ $submitLabel }}</button>
    <a class="button secondary" href="{{ route('posts.index') }}">Cancel</a>
</div>
