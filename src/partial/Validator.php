<?php
namespace App\partial;

use App\validator\IValidator;

abstract class Validator implements IValidator{

    private $nextValidator;

    public function __construct(IValidator $nextValidator = null)
    {
        $this->nextValidator = $nextValidator;    
    }

    public function runNextValidation($value)
    {
        return $this->nextValidator->validate($value);
    }
}