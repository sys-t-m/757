@vite('resources/css/components/footer.scss')
<hr class="style-eight">
<footer>
    <div class="footer-content">
        <div class="footer-sitemap">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('copertine') }}">Copertine</a></li>
                <li><a href="{{ route('chi-siamo') }}">Chi Siamo</a></li>
                <li><a href="{{ route('contattaci') }}">Contattaci</a></li>
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
            </ul>
        </div>
        <div class="footer-info">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
