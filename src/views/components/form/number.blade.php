@props([
    'class' => null,
    'id' => null,
    'key' => 'number',
    'title' => trans('validation.attributes.number'),
    'icon' => 'fas fa-sort',
    'type' => 'number',
    'min' => 1,
    'max' => 1000000000,
    'minlength' => 1,
    'maxlength' => 10,
    'required' => false,
    'label' => true,
    'autofocus' => false,
    'readonly' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :min="$min" :max="$max" :minlength="$minlength" :maxlength="$maxlength" :required="$required"
    :label="$label" :autofocus="$autofocus" :readonly="$readonly" :disabled="$disabled" :helper="$helper" />
