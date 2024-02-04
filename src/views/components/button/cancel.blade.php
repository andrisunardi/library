@props([
    'class' => null,
    'key' => 'cancel',
    'text' => trans('index.cancel'),
    'icon' => 'fas fa-xmark',
    'color' => 'danger',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
