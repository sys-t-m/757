@extends('layouts.app')

@section('content')
    <section class="contattaci-section">
        <div class="contattaci-container">
            <div class="contattaci-info">
                <h2>Mettiamoci in contatto</h2>
                <p>Siamo qui per rispondere a qualsiasi domanda o curiosità. Compila il modulo o usa i nostri recapiti diretti.</p>
                <div class="info-item">
                    <div class="icon">📍</div>
                    <span>Via Roma 123, 00100 Messina, Italia</span>
                </div>
                <div class="info-item">
                    <div class="icon">📞</div>
                    <span>+39 06 123 4567</span>
                </div>
                <div class="info-item">
                    <div class="icon">✉️</div>
                    <span>info@esempio.it</span>
                </div>
            </div>
            <form class="contattaci-form" action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" id="name" name="name" placeholder="Il tuo nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="la-tua@email.it" required>
                </div>
                <div class="form-group">
                    <label for="message">Messaggio</label>
                    <textarea id="message" name="message" placeholder="Come possiamo aiutarti?" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Invia Messaggio</button>
            </form>
        </div>
    </section>
@endsection
