@props([
    'wire' => null,
    'class' => null,
    'id' => null,
    'key' => 'image',
    'title' => trans('validation.attributes.image'),
    'icon' => 'fas fa-image',
    'type' => 'file',
    'required' => false,
    'label' => true,
    'accept' => env('ACCEPT_IMAGE'),
    'readonly' => false,
    'disabled' => false,
    'helper' =>
        trans('index.format') . ' : ' . env('FORMAT_IMAGE') . ' | ' . trans('index.size') . ' : ' . env('SIZE_IMAGE'),
])

<x-components::form.input :wire="$wire" :class="$class" :id="$id" :key="$key" :title="$title"
    :icon="$icon" :type="$type" :required="$required" :label="$label" :accept="$accept" :readonly="$readonly"
    :disabled="$disabled" :helper="$helper" />
