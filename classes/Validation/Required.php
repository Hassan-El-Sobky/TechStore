<?php
 namespace TechStore\Classes\Validation;

class Required implements ValidationRule
{
    public function check(string $name , $value)
    {
        if (empty($value)){ // error فاضيه طلع valueانا كده بقول لو ال 
            return "$name is Required";
        }
        return false;
    }
}
