@extends('layouts.app')

@section('content')
    <section class="copertine-section">
        <div class="copertine-header">
            <h1>Le Nostre Copertine</h1>
            <p>Esplora la nostra collezione esclusiva di riviste. Ogni numero racconta una storia unica tra innovazione, tradizione e stile.</p>
        </div>

        <div class="copertine-grid">
            @for ($i = 1; $i <= 6; $i++)
                <div class="copertina-card">
                    <div class="copertina-image">
                        <img src="https://picsum.photos/seed/magazine{{ $i }}/400/600" alt="Rivista Numero {{ $i }}">
                        <span class="price-tag">€12.00</span>
                    </div>
                    <div class="copertina-info">
                        <div>
                            <h3>Edizione #{{ $i }}</h3>
                            <p>Un viaggio attraverso le ultime tendenze del design e della cultura contemporanea.</p>
                        </div>
                        <a href="#" class="buy-button">Acquista Ora</a>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
