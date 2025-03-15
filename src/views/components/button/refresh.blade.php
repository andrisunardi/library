@props([
    'class' => null,
    'key' => 'refresh',
    'text' => trans('index.refresh'),
    'icon' => 'fas fa-rotate',
    'color' => 'info',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
