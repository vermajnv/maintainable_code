<?php

namespace App\validator;

use App\partial\Validator;
use App\validator\IValidator;
use App\validator\ValidationMessages;

class RequiredValidator extends Validator {

    public function __construct(IValidator $validator)
    {
        parent::__construct($validator);
    }

    public function validate($value)
    {
        return (!isset($value) && trim($value) != "") ? new ValidationMessages("FAILURE", "Value Required.") : $this->runNextValidation($value);
        
    }

}