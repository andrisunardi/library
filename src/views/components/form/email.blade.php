@props([
    'class' => null,
    'id' => null,
    'key' => 'email',
    'title' => trans('validation.attributes.email'),
    'icon' => 'fas fa-envelope',
    'type' => 'email',
    'minlength' => 1,
    'maxlength' => 255,
    'required' => false,
    'label' => true,
    'autocapitalize' => 'on',
    'autofocus' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :minlength="$minlength" :maxlength="$maxlength" :required="$required" :label="$label" :autocapitalize="$autocapitalize"
    :autofocus="$autofocus" :disabled="$disabled" :helper="$helper" />
