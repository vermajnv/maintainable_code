<?php

$value = $argv[1];
$message = '';

if(!isset($value))
{
    echo 'Value Required';
    return;
}
if(!is_numeric($value))
{
    echo 'Age Must be an Integer';
    return;
}
$floatValue = (float) $value;

if($floatValue < 0)
{
    echo 'Age cannot be negative';
    return;
}

if(!ctype_digit($value))
{
    echo 'Age : Float/Decimals are not allowed';
    return;
}

$age = (int) $value;

if($age < 0)
{
    echo 'Age Cannot be Negative';
    return;
}

if($age < 18)
{
    echo 'Age cannot be less than 18 years';
    return;
}

if($age > 60)
{
    echo 'Age cannot be greater than 60 years';
    return;
}

echo 'Valid Age ------';