@vite(['resources/css/components/gallery.scss'])

<div class="gallery-container">
    <h2 class="gallery-title">Ultime Copertine</h2>
    <div class="gallery-grid">
        @for ($i = 1; $i <= 6; $i++)
            <a href="{{ route('copertine.show', ['id' => $i]) }}" class="gallery-item">
                <img src="https://picsum.photos/seed/picsum{{ $i }}/400/600" alt="Gallery Image {{ $i }}" loading="lazy">
            </a>
        @endfor
    </div>
</div>
