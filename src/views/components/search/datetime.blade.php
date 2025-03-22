@props([
    'key' => 'datetime',
    'title' => trans('validation.attributes.datetime'),
    'icon' => 'fas fa-calendar',
    'type' => 'datetime-local',
    'label' => true,
    'required' => false,
])

<x-components::search :key="$key" :title="$title" :icon="$icon" :type="$type" :label="$label"
    :required="$required" />
