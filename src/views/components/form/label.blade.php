@props([
    'key' => null,
    'title' => null,
    'required' => false,
    'class' => null,
])

<label for="{{ $key }}"
    class="form-label {{ $class }} @if ($errors->any()) {{ $errors->has($key) ? 'text-danger' : 'text-success' }} @endif">
    {!! $title !!}
    @if ($required)
        <span class="text-danger">*</span>
    @endif
</label>
