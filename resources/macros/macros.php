<?php

Form::macro('addField', function($textId)
{
    $searchField = App\SearchField::where('text_id',$textId)->first();
    $out = array(Form::searchField($searchField), $searchField->category);
    return json_encode($out);
});

Form::macro('searchField', function($userField)
{
    $fieldType = $userField->field_type;
    if ($fieldType == 'text')
    {
        return Form::textField($userField->text_id,$userField->display_name);
    }
    elseif ($fieldType == 'select')
    {
        return Form::selectField($userField->text_id,$userField->display_name, json_decode($userField->select_values));
    }
    elseif ($fieldType == 'datepicker')
    {
        return Form::datepickerField($userField->text_id,$userField->display_name, json_decode($userField->filters));
    }
});

Form::macro('checkboxField', function($name, $label = null, $value = 1, $checked = null, $attributes = array())
{
    $attributes = array_merge(['id' => 'id-field-' . $name], $attributes);

    $out = '<div class="checkbox';
    $out .= $name . '">';
    $out .= '<label>';
    $out .= Form::checkbox($name, $value, $checked, $attributes) . ' ' . $label;
    $out .= '</div>';

    return $out;
});

Form::macro('datepickerField', function($name, $value = null, $filterValues = null)
{
    $out = '<div class="form-group">';
    $out .= Form::label($name, $value, array('class' => 'col-sm-2 control-label text-right'));
    $out .= '<div class="col-sm-10">';
    $out .= '<div class="form-inline">';
    $out .= Form::select($name . 'Select', $filterValues, null, array('class' => 'form-control'));
    $out .= Form::text($name, null, array('class' => 'form-control', 'id' => $name . 'Picker'));
    $out .= '<div class="betweenToggle" style="display:none">';
    $out .= '<span> and  </span>';
    $out .= Form::text($name . 'Max', null, array('class' => 'form-control', 'id' => $name . 'MaxPicker'));
    $out .= '</div></div></div></div>';
    return $out;
});

Form::macro('textField', function($name, $value = null)
{
    $out = '<div class="form-group">';
    $out .= Form::label($name, $value, array('class' => 'col-sm-2 control-label text-right'));
    $out .= '<div class="col-sm-10">';
    $out .= '<div class="form-inline">';
    $out .= Form::text($name, null, array('class' => 'form-control'));
    $out .= '</div></div></div>';
     return $out;
});

Form::macro('selectField', function($name, $value = null, $selectValues = array())
{
    $out = '<div class="form-group">';
    $out .= Form::label($name, $value, array('class' => 'col-sm-2 control-label text-right'));
    $out .= '<div class="col-sm-10">';
    $out .= '<div class="form-inline">';
    $out .= Form::select($name, $selectValues, null, array('class' => 'form-control', 'multiple'));
    $out .= '</div></div></div>';
    return $out;
});

if (! function_exists ( 'fieldAttributes' )) {
    function fieldAttributes($name, $attributes = array())
    {
        $name = str_replace('[]', '', $name);

        return array_merge(['class' => 'form-control', 'id' => 'id-field-' . $name], $attributes);
    }
}


Form::macro('betweenField', function($name, $label = null, $value = null, $attributes = array())
{
    $out = '<div class="form-group">';
    $out .= Form::label($name, $value, array('class' => 'col-sm-2 control-label text-right'));
    $out .= '<div class="col-sm-10">';
    $out .= '<div class="form-inline">';
    $out .= '<div class="input-group">';
    $out .= '<div class="input-group-btn">';
    $out .= '<button type="button" class="btn btn-default dropdown-toggle form-control"  data-toggle="dropdown">';
    $out .= '<span data-bind="label">Equals</span> <span class="caret"></span></button>';
    $out .= '<ul class="dropdown-menu" role="menu">';
    $out .= '<li><a href="#">Equals</a></li>';
    $out .= '<li><a href="#">Before</a></li>';
    $out .= '<li><a href="#">After</a></li>';
    $out .= '<li><a href="#">Between</a></li>';
    $out .= '</ul>';
    $out .= '</div>';
    $out .= Form::text($name . 'Min', null, array('class' => 'form-control', 'id' => $name . 'MinPicker'));
    $out .= '</div>';
    $out .= '<div name="betweenToggle" style="display:none">';
    $out .= '<span> and  </span>';
    $out .= Form::text($name . 'Max', null, array('class' => 'form-control', 'id' => $name . 'MaxPicker'));
    $out .= '</div></div></div></div>';

    return $out;
});

if(! function_exists ( 'fieldWrapper')) {
    function fieldWrapper($name, $label, $element)
    {
        $out = '<div class="form-group';
        $out .= fieldError($name) . '">';
        $out .= fieldLabel($name, $label);
        $out .= $element;
        $out .= '</div>';

        return $out;
    }
}
if(! function_exists ( 'fieldError')) {
    function fieldError($field)
    {
        $error = '';

        if ($errors = Session::get('errors')) {
            $error = $errors->first($field) ? ' has-error' : '';
        }

        return $error;
    }
}

if(! function_exists ( 'fieldLabel')) {
    function fieldLabel($name, $label)
    {
        if (is_null($label)) return '';

        $name = str_replace('[]', '', $name);

        $out = '<label for="id-field-' . $name . '" class="control-label">';
        $out .= $label . '</label>';

        return $out;
    }
}