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
                <img src="https://picsum.photos/seed/chisiamo/600/800" alt="Chi Siamo" loading="lazy">
            </div>
        </div>
    </section>
@endsection
