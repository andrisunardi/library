@props([
    'class' => null,
    'id' => null,
    'key' => 'location',
    'title' => trans('validation.attributes.location'),
    'icon' => 'fas fa-location-dot',
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

@if ($type == 'text')
    <x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
        :type="$type" :minlength="$minlength" :maxlength="$maxlength" :required="$required"
        :label="$label" :autocapitalize="$autocapitalize" :autofocus="$autofocus" :readonly="$readonly" :disabled="$disabled"
        :helper="$helper" />
@endif

@if ($type == 'textarea')
    <x-components::form.textarea :class="$class" :key="$key" :title="$title" :icon="$icon"
        :minlength="$minlength" :maxlength="$maxlength" :rows="$rows" :required="$required" :label="$label"
        :autocapitalize="$autocapitalize" :autofocus="$autofocus" :readonly="$readonly" :disabled="$disabled" :helper="$helper" />
@endif
