@props([
    'class' => null,
    'key' => 'pdf',
    'text' => trans('index.pdf'),
    'icon' => 'fas fa-file-pdf',
    'color' => 'danger',
    'size' => 'sm',
    'width' => '100',
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :confirm="$confirm" />
