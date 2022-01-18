<?php
namespace App\validator;

use App\partial\Validator;
use App\validator\IValidator;
use App\validator\ValidationMessages;

class StringValidator extends Validator {

    public function __construct(Ivalidator $nextValidator = null)
    {
        parent::__construct($nextValidator);
    }

    public function validate($value)
    {
        return !(is_string($value)) ?  new ValidationMessages('FAILURE', 'Data must be a string') : $this->runNextValidation($value);
    }

}