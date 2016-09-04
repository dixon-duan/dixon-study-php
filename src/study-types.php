<?php

// boolean value (true or false) is case insensitive
$dixon_boolean = true;
$dixon_boolean = TRUE;
$dixon_boolean = True;

$dixon_string = '0';
if ($dixon_string) {
    echo 'the value of $dixon_test is \'test\'. ';
}
echo "\n";

$dixon_number = 5 / 2;
var_dump($dixon_number);
$dixon_number = (int) $dixon_number;
var_dump($dixon_number);
var_dump(round(5 / 2));

$dixon_float = (0.2 + 0.4) * 10;
var_dump((int) $dixon_float);
// float NAN is case sensitive
var_dump(NAN);
var_dump(nan); // nan will be recognized as an undefined constant

// in PHP, ' is different with "
// in '', escaped chars are ignored
// in "", variable can be evaluated, but, in '',it can not
echo "a shit$dixon_number\n";