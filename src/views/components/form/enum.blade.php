@props([
    'class' => null,
    'id' => null,
    'key' => null,
    'title' => null,
    'icon' => null,
    'datas' => [],
    'valueAttribute' => 'value',
    'textAttribute' => 'name',
    'required' => false,
    'label' => true,
    'multiple' => false,
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
        wire:model="{{ $key }}" id="{{ $id ?? $key }}" {{ $multiple ? 'multiple' : null }}
        {{ $required ? 'required' : null }} {{ $disabled ? 'disabled' : null }}>
        <option value="">{{ trans('index.select') }} {{ $title }}</option>
        @foreach ($datas as $data)
            <option value="{{ $data->$valueAttribute }}"
                {{ $data->$valueAttribute == $this->$key ? 'selected' : null }}>
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
    <div class="form-text mb-3">
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
