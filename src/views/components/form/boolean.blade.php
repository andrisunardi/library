@props([
    'class' => null,
    'id' => null,
    'key' => null,
    'title' => null,
    'type' => 'radio',
    'text' => null,
    'required' => true,
    'label' => true,
    'second' => true,
    'textSecond' => null,
    'disabled' => false,
    'helper' => null,
])

@if ($label)
    <x-components::form.label :key="$key" :title="$title" :required="$required" />
@endif

<div class="form-check">
    <input
        class="form-check-input {{ $class }} {{ $disabled ? 'disabled' : null }} @if ($errors->any()) {{ $errors->has($key) ? 'is-invalid' : 'is-valid' }} @endif"
        type="{{ $type }}" wire:model="{{ $key }}" id="{{ $id ?? $key }}_1" name="{{ $key }}"
        value="1" {{ $required ? 'required' : null }} {{ $disabled ? 'disabled' : null }}>

    <label class="form-check-label" for="{{ $key }}_1"
        @if ($errors->any()) {{ $errors->has($key) ? 'text-danger' : 'text-success' }} @endif>
        {{ $text ?? trans('index.yes') }}
    </label>

    @if (!$second)
        @error($key)
            <div class="invalid-feedback">{{ $message }}</div>
        @else
            <div class="valid-feedback">{{ trans('validation.success') }}</div>
        @enderror
    @endif
</div>

@if ($second)
    <div class="form-check">
        <input
            class="form-check-input {{ $class }} {{ $disabled ? 'disabled' : null }} @if ($errors->any()) {{ $errors->has($key) ? 'is-invalid' : 'is-valid' }} @endif"
            type="{{ $type }}" wire:model="{{ $key }}" id="{{ $id ?? $key }}_0"
            name="{{ $key }}" value="0" {{ $required ? 'required' : null }}
            {{ $disabled ? 'disabled' : null }}>

        <label class="form-check-label" for="{{ $key }}_0"
            @if ($errors->any()) {{ $errors->has($key) ? 'text-danger' : 'text-success' }} @endif>
            {{ $textSecond ?? trans('index.no') }}
        </label>

        @error($key)
            <div class="invalid-feedback">{{ $message }}</div>
        @else
            <div class="valid-feedback">{{ trans('validation.success') }}</div>
        @enderror
    </div>
@endif

@if ($helper)
    <div class="form-text">
        {{ $helper }}
    </div>
@endif
