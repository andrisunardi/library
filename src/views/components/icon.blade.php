@props([
    'value' => null,
    'color' => null,
    'class' => null,
])

<span class="{{ $value }} fa-fw {{ $color ? "text-{$color}" : null }} {{ $class }}"></span>
