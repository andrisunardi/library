@props([
    'class' => null,
    'value' => null,
    'text' => null,
    'target' => '_blank',
    'icon' => 'fab fa-whatsapp',
    'navigate' => false,
])

<x-components::link :class="$class" :text="$value" :href="'https://api.whatsapp.com/send?phone=' . Utils::phone($value) . '&text=' . $text" :target="$target" :navigate="$navigate" />
