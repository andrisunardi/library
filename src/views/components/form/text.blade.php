@props([
    'class' => null,
    'id' => null,
    'key' => null,
    'title' => null,
    'icon' => null,
    'type' => 'text',
    'minlength' => 1,
    'maxlength' => 255,
    'required' => false,
    'label' => true,
    'autocapitalize' => 'on',
    'autofocus' => false,
    'readonly' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :minlength="$minlength" :maxlength="$maxlength" :required="$required" :label="$label" :autocapitalize="$autocapitalize"
    :autofocus="$autofocus" :readonly="$readonly" :disabled="$disabled" :helper="$helper" />
