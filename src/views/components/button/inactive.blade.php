@props([
    'class' => null,
    'key' => 'inactive',
    'text' => trans('index.inactive'),
    'icon' => 'fas fa-xmark',
    'color' => 'danger',
    'size' => 'sm',
    'width' => '100',
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :confirm="$confirm" />
