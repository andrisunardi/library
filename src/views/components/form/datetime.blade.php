@props([
    'wire' => null,
    'class' => null,
    'id' => null,
    'key' => 'datetime',
    'title' => trans('validation.attributes.datetime'),
    'icon' => 'fas fa-calendar',
    'type' => 'datetime-local',
    'min' => null,
    'max' => null,
    'required' => false,
    'label' => true,
    'autofocus' => false,
    'readonly' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :wire="$wire" :class="$class" :id="$id" :key="$key" :title="$title"
    :icon="$icon" :type="$type" :min="$min" :max="$max" :required="$required" :label="$label"
    :autofocus="$autofocus" :readonly="$readonly" :disabled="$disabled" :helper="$helper" />
