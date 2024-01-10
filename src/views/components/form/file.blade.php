@props([
    'class' => null,
    'id' => null,
    'key' => 'file',
    'title' => trans('validation.attributes.file'),
    'icon' => 'fas fa-file',
    'type' => 'file',
    'required' => false,
    'label' => true,
    'helper' => null,
    'accept' => env('ACCEPT_FILE'),
    'readonly' => false,
    'disabled' => false,
    'helper' =>
        trans('index.format') . ' : ' . env('FORMAT_FILE') . ' | ' . trans('index.size') . ' : ' . env('SIZE_FILE'),
])

<x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :required="$required" :label="$label" :accept="$accept" :readonly="$readonly" :disabled="$disabled"
    :helper="$helper" />
