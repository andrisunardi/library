@props([
    'class' => null,
    'key' => 'pdf',
    'text' => trans('index.pdf'),
    'icon' => 'fas fa-file-pdf',
    'color' => 'danger',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
