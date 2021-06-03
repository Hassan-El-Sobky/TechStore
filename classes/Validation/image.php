<?php
 namespace TechStore\Classes\Validation;

class Image implements ValidationRule
{
    public function check(string $name , $value)
    {
        $allowedExt = ['png' , 'jpg' , 'jpeg' , 'gif'];

        $ext = pathinfo($value['name'], PATHINFO_EXTENSION);

        if (! in_array($ext , $allowedExt)){ // error فاضيه طلع valueانا كده بقول لو ال 
            return "$name extension is not allowed , please upload png,jpg,jpeg,gif  ";
        }
        return false;
    }
}
