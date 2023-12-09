@props([
    'class' => null,
    'id' => null,
    'key' => 'image',
    'title' => trans('validation.attributes.image'),
    'icon' => 'fas fa-image',
    'type' => 'file',
    'required' => false,
    'label' => true,
    'accept' => env('ACCEPT_IMAGE'),
    'helper' =>
        trans('index.format') . ' : ' . env('FORMAT_IMAGE') . ' | ' . trans('index.size') . ' : ' . env('SIZE_IMAGE'),
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :key="$key" :title="$title" :icon="$icon" :type="$type" :required="$required"
    :label="$label" :accept="$accept" :disabled="$disabled" :helper="$helper" />
