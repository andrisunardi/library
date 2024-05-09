@props([
    'draggable' => 'false',
    'class' => null,
    'text' => null,
    'icon' => null,
    'position' => 'left',
    'color' => 'primary',
    'size' => 'md',
    'width' => '100',
    'href' => null,
    'target' => null,
    'confirm' => null,
    'download' => false,
    'navigate' => true,
    'button' => false,
    'active' => false,
    'disabled' => false,
])

@if ($text)
    <a draggable="{{ $draggable }}"
        class="{{ $class }} @if ($button) btn btn-{{ $color }} btn-{{ $size }} w-{{ $width }} @endif @if ($active) active @endif @if ($disabled) disabled @endif"
        href="{{ $href }}" target="{{ $target }}"
        @if ($confirm) onclick="return confirm('{{ $confirm }} ?')" @endif
        @if ($download) download @endif @if ($navigate) wire:navigate @endif
        @if ($disabled) disabled @endif>

        @if ($icon && $position == 'left')
            <span class="{{ $icon }} fa-fw"></span>
        @endif

        {{ $text }}

        @if ($icon && $position == 'right')
            <span class="{{ $icon }} fa-fw"></span>
        @endif
    </a>
@endif
