@props([
    'class' => null,
    'key' => 'restore',
    'text' => trans('index.restore'),
    'icon' => 'fas fa-trash-restore',
    'color' => 'success',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => trans('index.restore'),
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
