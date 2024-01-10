@props([
    'class' => null,
    'id' => null,
    'key' => 'number',
    'title' => trans('validation.attributes.percentage'),
    'icon' => 'fas fa-percentage',
    'type' => 'number',
    'min' => 1,
    'max' => 100,
    'minlength' => 1,
    'maxlength' => 3,
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
