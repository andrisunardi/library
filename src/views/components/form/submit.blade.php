@props([
    'class' => null,
    'key' => 'submit',
    'text' => trans('index.submit'),
    'icon' => 'fas fa-paper-plane',
    'type' => 'submit',
    'color' => 'primary',
])

<x-components::button :class="$class" :key="$key" :text="$text" :type="'submit'" :icon="$icon"
    :color="$color" />
