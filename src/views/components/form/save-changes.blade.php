@props([
    'class' => null,
    'key' => 'submit',
    'text' => trans('index.save_changes'),
    'icon' => 'fas fa-floppy-disk',
    'type' => 'submit',
    'color' => 'success',
])

<x-components::button :class="$class" :key="$key" :text="$text" :type="'submit'" :icon="$icon"
    :color="$color" />
