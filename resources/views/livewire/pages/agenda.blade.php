<x-page-layout>
    <div>
        <p class="text-green-400">{{ $nome }}</p>
        <input type="text" wire:model.lazy='nome'>
        <button wire:click='toggleMostarCont'>Mostrar</button>

        @if ($mostrarCont)
            azeitona
        @endif
    </div>
</x-page-layout>
