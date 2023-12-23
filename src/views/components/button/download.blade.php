@props([
    'class' => null,
    'key' => 'download',
    'text' => trans('index.download'),
    'icon' => 'fas fa-download',
    'color' => 'primary',
    'size' => 'sm',
    'width' => '100',
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :confirm="$confirm" />
