@props([
    'class' => 'text-decoration-none',
    'value' => null,
    'navigate' => false,
])

<x-link :class="$class" :text="$value" :href="'sms:+' . Utils::phone($value)" :navigate="$navigate" />
