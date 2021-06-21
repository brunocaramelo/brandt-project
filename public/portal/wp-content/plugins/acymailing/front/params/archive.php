<?php

class JFormFieldArchive extends JFormField
{
    var $type = 'archive';

    public function getInput()
    {

        $value = empty($this->value) ? 0 : $this->value;

        return '<input type="number" value="'.$value.'" name="'.$this->name.'" min="0">';
    }
}
