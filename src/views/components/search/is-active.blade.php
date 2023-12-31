@props([
    'key' => 'is_active',
    'title' => trans('validation.attributes.is_active'),
    'type' => 'checkbox',
    'required' => false,
])

<x-components::search.boolean :key="$key" :title="$title" :type="$type" :required="$required" />
