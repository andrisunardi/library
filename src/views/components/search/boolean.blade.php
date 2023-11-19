@props([
    'key' => null,
    'title' => null,
    'type' => 'radio',
    'name' => null,
    'label' => true,
    'required' => false,
    'second' => true,
])

@if ($label)
    <x-components::form.label :key="$key" :title="$title" />
@endif

<div class="form-check">
    <input class="form-check-input" type="{{ $type }}" wire:model.live="{{ $key }}"
        id="{{ $key }}_1" name="{{ $key }}" value="1" {{ $required ? 'required' : null }}>
    <label class="form-check-label" for="{{ $key }}_1">
        {{ $name ?? trans('index.yes') }}
    </label>
</div>

@if ($second)
    <div class="form-check">
        <input class="form-check-input" type="{{ $type }}" wire:model.live="{{ $key }}"
            id="{{ $key }}_0" name="{{ $key }}" value="0" {{ $required ? 'required' : null }}>
        <label class="form-check-label" for="{{ $key }}_0">
            {{ trans('index.no') }}
        </label>
    </div>
@endif
