<?php
namespace TechStore\Classes\Validation;

class Validator
{
    public $errors = [];

    public function validate(string $name , $value , array $rules)
    {
        foreach ($rules as $rule){
            $className = "TechStore\\Classes\\Validation\\" . $rule;
            $obj = new $className;

            $error = $obj->check($name , $value);
            if ($error !== false) //ده public $errors = []; اللي فوق Araa جوه push يبقي error راجع ب false انا كده بقول لو مكنش بيساوي 
            {
                $this->errors[] = $error;
                break;
            }
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function hasErrors() // تاني formو ارجع ع صفحه ال Sessionخزن في ال error لو في database ده كده لو فاضيه اخزن في 
    {
        return ! empty($this->errors);
    }
}
