@props([
    'class' => null,
    'id' => null,
    'key' => 'search',
    'title' => trans('validation.attributes.search'),
    'icon' => 'fas fa-search',
    'type' => 'search',
    'min' => null,
    'max' => null,
    'minlength' => null,
    'maxlength' => null,
    'required' => false,
    'label' => true,
    'autocapitalize' => 'on',
    'autofocus' => false,
    'step' => null,
    'accept' => null,
    'readonly' => null,
    'disabled' => null,
    'helper' => null,
])

@if ($label)
    <x-components::form.label :key="$key" :title="$title" />
@endif

<div class="input-group">
    @if ($icon)
        <x-components::search.icon :key="$key" :icon="$icon" />
    @endif

    <input class="form-control" wire:model.live="{{ $key }}" id="{{ $id ?? $key }}" type="{{ $type }}"
        min="{{ $min }}" max="{{ $max }}" minlength="{{ $minlength }}" maxlength="{{ $maxlength }}"
        step="{{ $step }}" accept="{{ $accept }}" placeholder="{{ $title }}"
        {{ $required ? 'required' : null }} autocapitalize="{{ $autocapitalize }}"
        {{ $autofocus ? 'autofocus' : null }} {{ $readonly ? 'readonly' : null }}
        {{ $disabled ? 'disabled' : null }} />

    @error($key)
        <div class="invalid-feedback">{{ $message }}</div>
    @else
        <div class="valid-feedback">{{ trans('validation.success') }}</div>
    @enderror
</div>

@if ($helper)
    <div class="form-text">
        {{ $helper }}
    </div>
@endif
