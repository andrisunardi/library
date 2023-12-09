@props([
    'class' => null,
    'id' => null,
    'key' => null,
    'title' => null,
    'datas' => [],
    'valueAttribute' => 'id',
    'textAttribute' => 'name',
    'label' => true,
    'checked' => false,
    'required' => false,
    'disabled' => false,
    'helper' => null,
])

@if ($label)
    <x-components::form.label :key="$key" :title="$title" :required="$required" />
@endif

@foreach ($datas as $data)
    <div class="form-check">
        <input
            class="form-check-input {{ $class }} {{ $disabled ? 'disabled' : null }} @if ($errors->any()) {{ $errors->has($key) ? 'is-invalid' : 'is-valid' }} @endif"
            type="radio" wire:model="{{ $key }}" id="{{ $id ?? $key }}_{{ $data[$valueAttribute] }}"
            name="{{ $key }}" value="{{ $data[$valueAttribute] }}" {{ $checked ? 'checked' : null }}
            {{ $required ? 'required' : null }} {{ $disabled ? 'disabled' : null }}>

        <label class="form-check-label" for="{{ $key }}_{{ $data[$valueAttribute] }}"
            @if ($errors->any()) {{ $errors->has($key) ? 'text-danger' : 'text-success' }} @endif>
            {{ $data[$textAttribute] }}
        </label>

        @if ($loop->last)
            @error($key)
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">{{ trans('validation.success') }}</div>
            @enderror
        @endif
    </div>
@endforeach

@if ($helper)
    <div class="form-text mb-3">
        {{ $helper }}
    </div>
@endif
