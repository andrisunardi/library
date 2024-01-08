@props([
    'class' => null,
    'key' => 'inactive',
    'text' => trans('index.inactive'),
    'icon' => 'fas fa-xmark',
    'color' => 'danger',
    'size' => 'sm',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
