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
])

<a draggable="{{ $draggable }}" class="{{ $button ? "btn btn-{$color} btn-{$size} w-{$width}" : $class }}"
    href="{{ $href }}" target="{{ $target }}"
    @if ($confirm) onclick="return confirm('{{ $confirm }} ?')" @endif
    @if ($download) download @endif>

    @if ($icon && $position == 'left')
        <span class="{{ $icon }} fa-fw"></span>
    @endif

    {{ $text }}

    @if ($icon && $position == 'right')
        <span class="{{ $icon }} fa-fw"></span>
    @endif
</a>
