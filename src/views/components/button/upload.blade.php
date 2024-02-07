@props([
    'class' => null,
    'key' => 'upload',
    'text' => trans('index.upload'),
    'icon' => 'fas fa-upload',
    'color' => 'primary',
    'size' => 'sm',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
