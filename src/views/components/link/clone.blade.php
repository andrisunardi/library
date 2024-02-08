@props([
    'class' => null,
    'text' => trans('index.clone'),
    'icon' => 'fas fa-clone',
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
