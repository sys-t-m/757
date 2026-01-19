@extends('layouts.app')

@section('content')
    <section class="chi-siamo-section">
        <div class="chi-siamo-container">
            <div class="chi-siamo-info">
                <h2>Chi Siamo</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <div class="mission-item">
                    <div class="icon">✨</div>
                    <span>La nostra visione: Innovazione e Tradizione</span>
                </div>
                <div class="mission-item">
                    <div class="icon">🤝</div>
                    <span>Il nostro impegno: Eccellenza nel Servizio</span>
                </div>
                <div class="mission-item">
                    <div class="icon">🌱</div>
                    <span>Sostenibilità: Rispetto per l'Ambiente</span>
                </div>

                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="chi-siamo-image">
                <div class="placeholder-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <p>Immagine Rappresentativa</p>
                </div>
            </div>
        </div>
    </section>
@endsection
