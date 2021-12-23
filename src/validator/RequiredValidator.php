<?php

namespace App\validator;
use App\validator\IValidator;
use App\validator\ValidationMessages;

class RequiredValidator implements IValidator {
    private $nextValidator;

    public function __construct(IValidator $nextValidator = null)
    {
        $this->nextValidator = $nextValidator;
    }

    public function validate($value)
    {
        return (!isset($value) && trim($value) != "") ? new ValidationMessages("FAILURE", "Value Required.") : $this->runNextValidation($value);
        
    }

    private function runNextValidation($value)
    {
        return $this->nextValidator->validate($value);
    }
}