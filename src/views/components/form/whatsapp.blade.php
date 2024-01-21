@props([
    'wire' => null,
    'class' => null,
    'id' => null,
    'key' => 'whatsapp',
    'title' => trans('validation.attributes.whatsapp'),
    'icon' => 'fab fa-whatsapp',
    'type' => 'number',
    'min' => 0,
    'max' => 999999999999999,
    'minlength' => 1,
    'maxlength' => 15,
    'required' => false,
    'label' => true,
    'autocapitalize' => 'on',
    'autofocus' => false,
    'readonly' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :wire="$wire" :class="$class" :id="$id" :key="$key" :title="$title"
    :icon="$icon" :type="$type" :min="$min" :max="$max" :minlength="$minlength" :maxlength="$maxlength"
    :required="$required" :label="$label" :autocapitalize="$autocapitalize" :autofocus="$autofocus" :readonly="$readonly" :disabled="$disabled"
    :helper="$helper" />
