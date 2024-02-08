@props([
    'class' => null,
    'value' => null,
    'icon' => 'fas fa-fax',
    'navigate' => false,
])

<x-components::link :class="$class" :text="$value" :href="'fax:+' . Utils::phone($value)" :icon="$icon" :navigate="$navigate" />
