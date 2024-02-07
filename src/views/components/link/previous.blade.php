@props([
    'class' => null,
    'text' => trans('index.previous'),
    'icon' => 'fas fa-arrow-left',
    'color' => 'primary',
    'size' => 'md',
    'width' => '100',
    'href' => null,
    'target' => null,
    'button' => true,
    'navigate' => true,
])

<x-components::link :class="$class" :text="$text" :icon="$icon" :color="$color" :size="$size"
    :width="$width" :href="url()->previous() == url()->current() ? $href : url()->previous()" :target="$target" :button="$button" :navigate="$navigate" />
