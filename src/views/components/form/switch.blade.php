@props([
    'key' => null,
    'id' => null,
    'value' => null,
])

<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="{{ $key }}" {{ $value ? 'checked' : null }}
        wire:click="{{ $key }}({{ $id }})">
    <label class="form-check-label" for="{{ $key }}">
        <span class="text-{{ Utils::successDanger($value) }}">
            {{ Utils::yesNo($value) }}
        </span>
    </label>
</div>
