@props([
    'class' => null,
    'href' => null,
    'src' => null,
    'alt' => null,
    'draggable' => 'false',
    'width' => 'w-100',
    'target' => '_blank',
    'onerror' => '/images/image-not-available.png',
])

<a draggable="{{ $draggable }}" href="{{ $href ?? $src }}" target="{{ $target }}">
    <img draggable="{{ $draggable }}" src="{{ $src }}" class="{{ $class }} {{ $width }}"
        alt="{{ $alt }}" onerror="this.src='{{ $onerror }}'" />
</a>
