@props([
    'class' => null,
    'key' => 'sync',
    'text' => trans('index.sync'),
    'icon' => 'fas fa-sync',
    'color' => 'info',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
