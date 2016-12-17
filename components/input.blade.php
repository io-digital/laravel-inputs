<?php
/**
 * @param $field_name
 * @param $input_type string
 * @param $class array
 */
$label = title_case(implode(' ', explode('_',$field_name)));
?>
<fieldset class="form-group {{ $errors->has($field_name) ? 'has-error' : '' }}">
    <label for="{{ $field_name }}" class="col-md-2 control-label">{{ $label }}</label>
    <div class="col-md-6">
        <input
                autocomplete="false"
                type="{{ $input_type }}"
                class="form-control {{ isset($class) ? implode(' ',$class) : ''}}"
                name="{{ $field_name }}"
                id="{{ $field_name }}"
                value="{{null !== $input->get($field_name) ? $input->get($field_name) : isset($model->$field_name) ? $model->$field_name : old($field_name)}}"
                @if (isset($accept))
                    accept="{{$accept}}"
                @endif
        />

        @if ($errors->has($field_name))
            <span class="help-block">
                <strong>{{ $errors->first($field_name) }}</strong>
            </span>
        @endif
    </div>
</fieldset>