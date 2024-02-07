@props([
    'class' => null,
    'value' => null,
    'icon' => 'fas fa-sms',
    'navigate' => false,
])

<x-components::link :class="$class" :text="$value" :href="'sms:+' . Utils::phone($value)" :navigate="$navigate" />
