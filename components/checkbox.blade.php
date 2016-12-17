<?php
/**
 * @param $field_name
 * @param $checked bool
 * @param $class array
 */
$label = title_case(implode(' ', explode('_',$field_name)));
?>
<fieldset class="form-group {{ $errors->has($field_name) ? 'has-error' : '' }}">
    <div class="col-md-6 col-md-offset-2">
        <div class="checkbox">
            <label>
                <input
                        type="checkbox"
                        class="{{ isset($class) ? implode(' ',$class) : ''}}"
                        name="{{ $field_name }}"
                        id="{{ $field_name }}"
                        {{ isset($checked) && $checked ? 'checked="checked"' : '' }}
                        value="{{null !== $input->get($field_name) ? $input->get($field_name) : isset($model[$field_name])? $model[$field_name] : ''}}"
                />{{ str_replace('_', ' ', title_case($field_name)) }}
            </label>
        </div>

        @if ($errors->has($field_name))
            <span class="help-block">
                <strong>{{ $errors->first($field_name) }}</strong>
            </span>
        @endif
    </div>
</fieldset>