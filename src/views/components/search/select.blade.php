@props([
    'wire' => 'defer',
    'key' => null,
    'title' => null,
    'icon' => null,
    'datas' => [],
    'valueAttribute' => 'id',
    'textAttribute' => 'name',
    'label' => true,
    'required' => false,
    'multiple' => false,
])

@if ($label)
    <x-components::form.label :key="$key" :title="$title" />
@endif

<div class="input-group">
    @if ($icon)
        <x-components::search.icon :icon="$icon" />
    @endif

    <select class="form-select select2" @if ($wire == 'defer') wire:model="{{ $key }}" @endif
        @if ($wire == 'lazy') wire:model.lazy="{{ $key }}" @endif
        @if ($wire == 'live') wire:model.live="{{ $key }}" @endif
        @if ($wire == 'blur') wire:model.blur="{{ $key }}" @endif
        @if ($wire == 'change') wire:model.change="{{ $key }}" @endif id="{{ $key }}"
        {{ $multiple ? 'multiple' : null }} {{ $required ? 'required' : null }}>
        <option value="">{{ trans('index.all') }} {{ $title }}</option>
        @foreach ($datas as $data)
            <option value="{{ $data[$valueAttribute] ?? $data }}"
                {{ ($data[$valueAttribute] ?? $data) == $this->$key ? 'selected' : null }}>
                {{ $data[$textAttribute] ?? $data }}
            </option>
        @endforeach
    </select>
</div>

@push('script')
    <script>
        $("#{{ $key }}").on("change", function() {
            @this.set("{{ $key }}", $(this).val())
        })
    </script>
@endpush
