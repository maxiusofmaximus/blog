<x-layout meta-title="Blog title" meta-description="Blog description">
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <h2>
            <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
        </h2>
    @endforeach
</x-layout>