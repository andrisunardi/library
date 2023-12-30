@props([
    'draggable' => 'false',
    'href' => null,
    'src' => null,
    'target' => '_blank',
    'navigate' => false,
    'class' => null,
    'width' => '100',
    'alt' => null,
    'onerror' => '/images/image-not-available.png',
])

<a draggable="{{ $draggable }}" href="{{ $href ?? $src }}" target="{{ $target }}"
    @if ($navigate) wire:navigate @endif>
    <img draggable="{{ $draggable }}" src="{{ $src }}" class="{{ $class }} w-{{ $width }}"
        alt="{{ $alt }}" onerror="this.src='{{ $onerror }}'" />
</a>
