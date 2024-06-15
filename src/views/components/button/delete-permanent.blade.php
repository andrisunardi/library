@props([
    'class' => null,
    'key' => 'deletePermanent',
    'text' => trans('index.delete_permanent'),
    'icon' => 'fas fa-trash',
    'color' => 'danger',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => trans('index.delete_permanent'),
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
