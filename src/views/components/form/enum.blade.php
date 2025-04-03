@props([
    'wire' => 'defer',
    'class' => null,
    'id' => null,
    'key' => null,
    'title' => null,
    'icon' => null,
    'datas' => [],
    'value' => null,
    'valueAttribute' => 'value',
    'textAttribute' => 'name',
    'required' => false,
    'label' => true,
    'multiple' => false,
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

    <select
        class="form-select select2 {{ $class }} {{ $disabled ? 'disabled' : null }} @if ($errors->any()) {{ $errors->has($key) ? 'is-invalid' : 'is-valid' }} @endif"
        @if ($wire == 'defer') wire:model="{{ $key }}" @endif
        @if ($wire == 'lazy') wire:model.lazy="{{ $key }}" @endif
        @if ($wire == 'live') wire:model.live="{{ $key }}" @endif
        @if ($wire == 'blur') wire:model.blur="{{ $key }}" @endif
        @if ($wire == 'change') wire:model.change="{{ $key }}" @endif id="{{ $id ?? $key }}"
        {{ $multiple ? 'multiple' : null }} {{ $required ? 'required' : null }} {{ $readonly ? 'readonly' : null }}
        {{ $disabled ? 'disabled' : null }}>
        <option value="">{{ trans('index.select') }} {{ $title }}</option>
        @foreach ($datas as $data)
            <option value="{{ $data->$valueAttribute }}" {{ $data->$valueAttribute == $value ? 'selected' : null }}>
                {{ Utils::translate($data->$textAttribute) }}
            </option>
        @endforeach
    </select>

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

@push('script')
    <script>
        $("#{{ $key }}").on("change", function() {
            @this.set("{{ $key }}", $(this).val())
        })
    </script>
@endpush
