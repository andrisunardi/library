@props([
    'wire' => null,
    'key' => 'is_active',
    'title' => trans('validation.attributes.is_active'),
])

<x-components::form.boolean :wire="$wire" :key="$key" :title="$title" />
