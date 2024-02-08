@props([
    'class' => null,
    'text' => trans('index.delete_permanent'),
    'icon' => 'fas fa-dumpster-fire',
    'color' => 'danger',
    'size' => 'md',
    'width' => '100',
    'href' => null,
    'target' => null,
    'button' => true,
    'navigate' => false,
    'confirm' => trans('index.delete_permanent'),
])

<x-components::link :class="$class" :text="$text" :icon="$icon" :color="$color" :size="$size"
    :width="$width" :href="$href" :target="$target" :button="$button" :navigate="$navigate" :confirm="$confirm" />
