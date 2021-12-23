<?php

$value = $argv[1];
$message = '';

if(isset($value)){
   if(is_numeric($value)) {
        $floatValue = (float) $value;
        if($floatValue < 0){
            $message = 'Age cannot be Negative';
        }
        else {
            if(ctype_digit($value)){
                $age = (int) $value;
                if($age < 0) {
                    $message = 'Age cannot be negative';
                }
                else{
                    if($age < 18) {
                        $message = 'Age must be greater than 18 years';
                    }
                    if($age > 60) {
                        $message = 'Age cannot be greater than 60 years';
                    }
                    if($age >= 18 && $age <= 60){
                        $message = 'Age is valid ....';
                    }
                }
            }
            else{
                $message = 'Age : Float/Decimals are not allowed';
            }
        }
   }
   else
   {
       $message = 'Age must be an integer.';
   }
}
else
{
    $message = 'Age is mandatory';
}

echo $message;