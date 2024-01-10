@props([
    'class' => null,
    'id' => null,
    'key' => null,
    'title' => null,
    'icon' => null,
    'type' => null,
    'min' => null,
    'max' => null,
    'minlength' => null,
    'maxlength' => null,
    'required' => false,
    'label' => true,
    'step' => null,
    'accept' => null,
    'autocapitalize' => 'on',
    'autocomplete' => 'off',
    'autofocus' => false,
    'readonly' => false,
    'disabled' => false,
    'helper' => null,
    'wire' => 'defer',
])

@if ($label)
    <x-components::form.label :key="$key" :title="$title" :required="$required" />
@endif

<div class="input-group">
    @if ($icon)
        <x-components::form.icon :key="$key" :icon="$icon" />
    @endif

    <input
        class="form-control {{ $class }} {{ $disabled ? 'disabled' : null }} @if ($errors->any()) {{ $errors->has($key) ? 'is-invalid' : 'is-valid' }} @endif"
        @if ($wire == 'defer') wire:model="{{ $key }}" @endif
        @if ($wire == 'lazy') wire:model.lazy="{{ $key }}" @endif
        @if ($wire == 'live') wire:model.live="{{ $key }}" @endif
        @if ($wire == 'blur') wire:model.blur="{{ $key }}" @endif
        @if ($wire == 'change') wire:model.change="{{ $key }}" @endif id="{{ $id ?? $key }}"
        type="{{ $type }}" min="{{ $min }}" max="{{ $max }}" minlength="{{ $minlength }}"
        maxlength="{{ $maxlength }}" step="{{ $step }}" accept="{{ $accept }}"
        placeholder="{{ $title }}" {{ $required ? 'required' : null }} autocapitalize="{{ $autocapitalize }}"
        autocomplete="{{ $autocomplete }}" {{ $autofocus ? 'autofocus' : null }} {{ $readonly ? 'readonly' : null }}
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

@if ($type == 'file')
    <div class="alert alert-info w-100 mt-3" role="alert" wire:loading wire:target="{{ $key }}">
        {{ trans('index.please_wait_until_the_uploading_finished') }}
    </div>
@endif
