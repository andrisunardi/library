@props([
    'class' => null,
    'text' => trans('index.detail'),
    'icon' => 'fas fa-list',
    'color' => 'info',
    'size' => 'md',
    'width' => '100',
    'href' => null,
    'target' => null,
    'button' => true,
    'navigate' => true,
])

<x-components::link :class="$class" :text="$text" :icon="$icon" :color="$color" :size="$size"
    :width="$width" :href="$href" :target="$target" :button="$button" :navigate="$navigate" />
