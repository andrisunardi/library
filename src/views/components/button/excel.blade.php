@props([
    'class' => null,
    'key' => 'excel',
    'text' => trans('index.excel'),
    'icon' => 'fas fa-file-excel',
    'color' => 'success',
    'size' => 'sm',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
