@extends('layouts.app')

@section('content')
    <section class="copertine-show-section">
        <div class="container">
            <div class="back-link">
                <a href="{{ route('copertine') }}">← Torna alle copertine</a>
            </div>

            <div class="copertina-detail">
                <div class="copertina-detail-image">
                    <img src="https://picsum.photos/seed/magazine{{ $id }}/600/900" alt="Rivista Numero {{ $id }}">
                </div>

                <div class="copertina-detail-info">
                    <h1>Edizione #{{ $id }}</h1>
                    <p class="price">€12.00</p>
                    <div class="description">
                        <p>Questa è una descrizione dettagliata della copertina numero {{ $id }}. Ogni numero di 757 è curato nei minimi dettagli per offrire un'esperienza visiva e tattile senza precedenti.</p>
                        <p>In questo volume esploriamo nuovi orizzonti artistici, intervistando designer di fama internazionale e scoprendo le tendenze che plasmeranno il futuro della cultura visiva.</p>
                    </div>

                    <div class="actions">
                        <button class="buy-now-button">Acquista Ora</button>
                    </div>

                    <div class="details-list">
                        <ul>
                            <li><strong>Formato:</strong> A4 (210 x 297 mm)</li>
                            <li><strong>Pagine:</strong> 124</li>
                            <li><strong>Carta:</strong> Patinata opaca 150g</li>
                            <li><strong>Data di uscita:</strong> Gennaio 2026</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
