<div>
    @if (!empty($header))
        <header>
            {{ $header }}
        </header>
    @endif

    <main>
        {{ $slot }}
    </main>

    @if (!empty($footer))
        <footer>
            {{ $footer }}
        </footer>
    @endif
</div>
