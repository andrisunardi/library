@props([
    'class' => null,
    'text' => null,
    'icon' => 'fas fa-external-link',
    'href' => null,
    'target' => '_blank',
    'button' => false,
    'navigate' => false,
])

<x-components::link :class="$class" :text="$text" :icon="$icon" :href="$href" :target="$target"
    :button="$button" :navigate="$navigate" />
