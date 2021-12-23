<?php

namespace App\validator;

use App\validator\IValidator;
use App\validator\ValidationMessages;

class NumericValidator implements IValidator {
    private $nextValidator;

    public function __construct(IValidator $nextValidator = null)
    {
        $this->nextValidator = $nextValidator;
    }

    public function validate($value)
    {
        return (!is_numeric($value)) ? new ValidationMessages("FAILURE", 'Age Must be an Integer') : $this->nextValidator->validate($value);
    }
}