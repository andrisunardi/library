@props([
    'class' => null,
    'key' => 'delete',
    'text' => trans('index.delete'),
    'icon' => 'fas fa-trash',
    'color' => 'danger',
    'size' => 'sm',
    'width' => '100',
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :confirm="$confirm" />
