<?php
/**
 * @param $field_name
 * @param $option_list array
 * @param $selected_option
 * @param $class array
 */
$label = title_case(implode(' ', explode('_',$field_name)));
?>
<fieldset class="form-group {{ $errors->has($field_name) ? 'has-error' : '' }}">
    <label for="{{ $field_name }}" class="col-md-2 control-label">{{ $label }}</label>
    <div class="col-md-6">
        @if (isset($multiple) && $multiple == true)
            <select
                    name="{{ $field_name }}[]"
                    id="{{ $field_name }}"
                    class="form-control {{ isset($class) ? implode(' ',$class) : ''}}"
                    @if (isset($multiple) && $multiple == true) multiple @endif
            >
                @foreach($option_list as $option)
                    <option
                            value="{{ $option->id }}"
                            @if(isset($data_attribute))
                                data-{{ $data_attribute }}={{ $option[$data_value] }}
                            @endif

                            @if (isset($selected_option) && is_array($selected_option))
                                @foreach($selected_option as $selected)
                                    {{ $selected == $option->id ? 'selected' : '' }}
                                @endforeach
                            @else
                                {{ isset($selected_option) && $selected_option == $option->id ? 'selected' : '' }}
                            @endif
                    >{{ $option->name }}</option>
                @endforeach
            </select>
        @else
            <select
                    name="{{ $field_name }}"
                    id="{{ $field_name }}"
                    class="form-control {{ isset($class) ? implode(' ',$class) : ''}}"
            >
                @foreach($option_list as $option)
                    <option
                            value="{{ $option->id }}"
                            @if(isset($data_attribute))
                                data-{{ $data_attribute }}={{ $option[$data_value] }}
                            @endif
                            {{ isset($selected_option) && $selected_option == $option->id ? 'selected' : '' }}
                    >{{ $option->name }}</option>
                @endforeach
            </select>
        @endif
        @if ($errors->has($field_name))
            <span class="help-block">
                <strong>{{ $errors->first($field_name) }}</strong>
            </span>
        @endif
    </div>
</fieldset>