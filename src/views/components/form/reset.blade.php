@props([
    'class' => null,
    'key' => 'resetFields',
    'text' => trans('index.reset'),
    'icon' => 'fas fa-undo',
    'color' => 'warning',
    'confirm' => null,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :confirm="$confirm" />
