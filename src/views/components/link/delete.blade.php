@props([
    'class' => null,
    'text' => trans('index.delete'),
    'icon' => 'fas fa-trash',
    'color' => 'danger',
    'size' => 'md',
    'width' => '100',
    'href' => null,
    'target' => null,
    'button' => true,
    'navigate' => true,
    'confirm' => trans('index.delete'),
])

<x-components::link :class="$class" :text="$text" :icon="$icon" :color="$color" :size="$size"
    :width="$width" :href="$href" :target="$target" :button="$button" :navigate="$navigate" :confirm="$confirm" />
