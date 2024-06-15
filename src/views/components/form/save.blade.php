@props([
    'class' => null,
    'key' => 'submit',
    'text' => trans('index.save'),
    'icon' => 'fas fa-floppy-disk',
    'type' => 'submit',
    'color' => 'edit',
])

<x-components::button :class="$class" :key="$key" :text="$text" :type="'submit'" :icon="$icon"
    :color="$color" />
