@props([
    'class' => null,
    'key' => 'active',
    'text' => trans('index.active'),
    'icon' => 'fas fa-check',
    'color' => 'success',
    'size' => 'sm',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
