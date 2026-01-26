@extends('layouts.app')

@section('content')
    <section class="blog-index">
        <div class="blog-header">
            <h2>Il Nostro Blog</h2>
            <p>Esplora le ultime novità, idee artistiche e racconti dal nostro mondo.</p>
        </div>

        <div class="posts-grid">
            @foreach($posts as $post)
                <article class="post-card">
                    @if($post->image)
                        <div class="post-image">
                            <img src="{{ $post->image }}" alt="{{ $post->title }}">
                        </div>
                    @endif
                    <div class="post-content">
                        <span class="post-date">{{ $post->created_at->format('d M Y') }}</span>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ Str::limit($post->excerpt ?? $post->content, 120) }}</p>
                        <a href="{{ route('blog.show', $post->slug) }}" class="read-more">Leggi di più →</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
