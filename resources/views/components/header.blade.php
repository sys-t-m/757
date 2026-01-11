@vite('resources/css/components/header.scss')
<header>
    <a href="{{ route('copertine') }}" class="header-element-1">
        Copertine
    </a>
    <a href="{{ route('chi-siamo') }}" class="header-element-2">
        Chi Siamo
    </a>
    <a href="{{ route('home') }}" class="header-logo">
        <h1>Il Titolo</h1>
    </a>
    <a href="{{ route('contattaci') }}" class="header-element-3">
        Contattaci
    </a>
    <a href="{{ route('blog.index') }}" class="header-element-4">
        Blog
    </a>
</header>

<hr class="double-hr">
