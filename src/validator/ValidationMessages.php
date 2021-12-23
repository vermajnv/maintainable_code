<?php

namespace App\validator;

class ValidationMessages {
    private $status, $message;

    public function __construct($status, $message)
    {
        $this->status = $status;
        $this->message = $message;
    }

    // public function getMessage()
    // {
    //     return $this->message;
    // }

    // public function getStatus()
    // {
    //     return $this->status;
    // }

    public function __get($prop)
    {
        return $this->$prop;
    }
}