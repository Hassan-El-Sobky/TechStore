<?php
namespace TechStore\Classes\Validation;

class Str implements ValidationRule
{
    public function check(string $name , $value)
    {
        if (! is_string($value)){ // error string مكنش valueانا كده بقول لو ال 
            return "$name is must be String";
        }
        return false;
    }
}

