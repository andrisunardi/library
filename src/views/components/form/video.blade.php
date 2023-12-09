@props([
    'class' => null,
    'id' => null,
    'key' => 'video',
    'title' => trans('validation.attributes.video'),
    'icon' => 'fas fa-video',
    'type' => 'file',
    'required' => false,
    'label' => true,
    'accept' => env('ACCEPT_VIDEO'),
    'disabled' => false,
    'helper' =>
        trans('index.format') . ' : ' . env('FORMAT_VIDEO') . ' | ' . trans('index.size') . ' : ' . env('SIZE_VIDEO'),
])

<x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :required="$required" :label="$label" :accept="$accept" :disabled="$disabled" :helper="$helper" />
