<?php

use App\validator\{RequiredValidator, NumericValidator};

$val = $argv[1];
$status = new RequiredValidator(
    new NumericValidator()
);