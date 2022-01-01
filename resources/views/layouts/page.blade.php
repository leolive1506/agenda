<div>
    @if (!empty($header)) {{ $header }} @endif

    {{ $slot }}

    @if (!empty($footer)) {{ $footer }} @endif
</div>
