@props([
    'wire' => null,
    'class' => null,
    'id' => null,
    'key' => 'time',
    'title' => trans('validation.attributes.time'),
    'icon' => 'fas fa-clock',
    'type' => 'time',
    'step' => 1,
    'required' => false,
    'label' => true,
    'readonly' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :wire="$wire" :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :step="$step" :required="$required" :label="$label" :readonly="$readonly" :disabled="$disabled"
    :helper="$helper" />
