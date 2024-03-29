@props([
    'class' => null,
    'key' => 'delete',
    'text' => trans('index.delete'),
    'icon' => 'fas fa-trash',
    'color' => 'danger',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => trans('index.delete'),
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
