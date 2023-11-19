@props([
    'key' => 'date',
    'title' => trans('validation.attributes.date'),
    'icon' => 'fas fa-calendar',
    'type' => 'date',
    'label' => true,
    'required' => false,
])

<x-components::search :key="$key" :title="$title" :icon="$icon" :type="$type" :label="$label"
    :required="$required" />
