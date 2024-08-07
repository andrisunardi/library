@props([
    'class' => null,
    'key' => 'print',
    'text' => trans('index.print'),
    'icon' => 'fas fa-print',
    'color' => 'primary',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
