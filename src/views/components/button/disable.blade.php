@props([
    'class' => null,
    'key' => 'disable',
    'text' => trans('index.disable'),
    'icon' => 'fas fa-xmark',
    'color' => 'warning',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
