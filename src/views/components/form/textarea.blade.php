@props([
    'class' => null,
    'id' => null,
    'key' => null,
    'title' => null,
    'icon' => 'fas fa-file-lines',
    'minlength' => 1,
    'maxlength' => 65535,
    'rows' => null,
    'required' => false,
    'label' => true,
    'autocapitalize' => 'on',
    'autofocus' => false,
    'readonly' => false,
    'disabled' => false,
    'helper' => null,
])

@if ($label)
    <x-components::form.label :key="$key" :title="$title" :required="$required" />
@endif

<div class="input-group">
    @if ($icon)
        <x-components::form.icon :key="$key" :icon="$icon" />
    @endif

    <textarea
        class="form-control {{ $class }} {{ $disabled ? 'disabled' : null }} @if ($errors->any()) {{ $errors->has($key) ? 'is-invalid' : 'is-valid' }} @endif"
        wire:model="{{ $key }}" id="{{ $id ?? $key }}" minlength="{{ $minlength }}"
        maxlength="{{ $maxlength }}" rows="{{ $rows }}" placeholder="{{ $title }}"
        {{ $required ? 'required' : null }} autocapitalize="{{ $autocapitalize }}" {{ $autofocus ? 'autofocus' : null }}
        {{ $readonly ? 'readonly' : null }} {{ $disabled ? 'disabled' : null }}>
    </textarea>

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
