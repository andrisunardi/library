@props([
    'color' => 'primary',
    'key' => null,
    'text' => null,
    'icon' => null,
    'class' => null,
    'loader' => false,
    'dismissible' => false,
    'fade' => false,
    'show' => false,
])

<div @if ($loader) wire:loading.block wire:target="{{ $key }}" @endif>
    <div class="alert alert-{{ $color }} {{ $dismissible ? 'alert-dismissible' : null }} {{ $fade ? 'fade' : null }} {{ $show ? 'show' : null }} d-flex align-items-center {{ $class }}"
        role="alert">
        @if ($icon)
            <span class="{{ $icon }} fa-fw me-2"></span>
        @endif

        <div>
            {!! $text !!}
        </div>
    </div>
</div>
