@props([
    'class' => null,
    'key' => 'edit',
    'text' => trans('index.edit'),
    'icon' => 'fas fa-edit',
    'color' => 'success',
    'size' => 'sm',
    'width' => '100',
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :confirm="$confirm" />