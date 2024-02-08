@props([
    'class' => null,
    'key' => 'edit',
    'text' => trans('index.edit'),
    'icon' => 'fas fa-edit',
    'color' => 'success',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
