@props([
    'class' => null,
    'value' => null,
    'icon' => 'fas fa-envelope',
    'navigate' => false,
])

<x-components::link :class="$class" :text="$value" :href="'mailto:' . $value" :icon="$icon" :navigate="$navigate" />
