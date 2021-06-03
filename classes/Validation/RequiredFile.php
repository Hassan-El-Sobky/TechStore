<?php
 namespace TechStore\Classes\Validation;

class RequiredFile implements ValidationRule
{
    public function check(string $name , $value)
    {
        if ($value['error'] != 0){ // error فاضيه طلع valueانا كده بقول لو ال 
            return "$name is Required";
        }
        return false;
    }
}
