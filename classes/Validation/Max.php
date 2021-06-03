<?php
namespace TechStore\Classes\Validation;

class Max implements ValidationRule
{
    public function check(string $name , $value)
    {
        if (! filter_var($value) > 255){ // error انا كده بقول لو ذاد عن 255 طلع 
            return "$name must not exceed 255 Max";
        }
        return false; 
    }
}
