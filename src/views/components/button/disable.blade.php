@props([
    'class' => null,
    'key' => 'disable',
    'text' => 'Disable',
    'icon' => 'fas fa-xmark',
    'color' => 'warning',
    'size' => 'sm',
    'width' => '100',
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :confirm="$confirm" />
