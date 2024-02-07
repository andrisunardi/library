@props([
    'class' => null,
    'value' => null,
    'icon' => 'fas fa-phone',
    'navigate' => false,
])

<x-components::link :class="$class" :text="$value" :href="'tel:+' . Utils::phone($value)" :navigate="$navigate" />
