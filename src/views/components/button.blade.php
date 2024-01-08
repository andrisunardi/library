@props([
    'class' => null,
    'key' => null,
    'text' => null,
    'icon' => null,
    'position' => 'left',
    'type' => 'button',
    'color' => 'primary',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => null,
])

<button type="{{ $type }}"
    class="btn btn-{{ $color }} btn-{{ $size }} w-{{ $width }} {{ $class }} {{ $disabled ? 'disabled' : null }}"
    @if ($type != 'submit') wire:click="{{ $key }}" @endif wire:loading.attr="disabled"
    @if ($confirm) onclick="return confirm('{{ $confirm }} ?') || event.stopImmediatePropagation()" @endif
    {{ $disabled ? 'disabled' : null }}>

    @if ($icon && $position == 'left')
        <span class="{{ $icon }} fa-fw"></span>
    @endif

    {!! $text !!}

    @if ($icon && $position == 'right')
        <span class="{{ $icon }} fa-fw"></span>
    @endif

    <span class="spinner-border spinner-border-sm" wire:loading wire:target="{{ $key }}"></span>
</button>
