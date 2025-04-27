@props([
    'class' => null,
    'key' => 'submit',
    'text' => trans('index.save'),
    'icon' => 'fas fa-save',
    'type' => 'submit',
    'color' => 'success',
])

<x-components::button :class="$class" :key="$key" :text="$text" :type="'submit'" :icon="$icon"
    :color="$color" />
