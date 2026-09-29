<?php

/**
* Section 1: What Are Constants & Variable Variables In PHP
*/

$name = "Ali";
$age = 20;
$length = 175;

echo $name . ' ' . $age . ' ' . $length . "\n";


$balance = 100;

$balance += 50;
echo $balance . "\n";

$balance -= 20;
echo $balance . "\n";

$balance *= 2;
echo $balance . "\n";


$x = 10;
$y = &$x;

$y = 25;

echo $x . ' ' . $y . "\n";


define('SITE_URL' , "[https://example.com](https://example.com)");

const MAX_ATEMPTS = 5;

echo SITE_URL . "\n" . MAX_ATEMPTS . "\n";


// SITE_URL = "[https://gemini.google.com]";
// PHP Parse error:  syntax error, unexpected token "=" in C:\Users\sukur\OneDrive\Desktop\Php\example.php on line 36


// echo $SITE_URL;
// PHP Warning:  Undefined variable $SITE_URL in C:\Users\sukur\OneDrive\Desktop\Php\example.php on line 39


echo __FILE__ . "\n";
echo __LINE__ . "\n";

$fruit = "Apple";
$$fruit = "Red and sweet";

echo $$fruit . "\n";


$a = "b";
$$a = "c";
$$b = "Aim was done!";

echo $$$a . "\n";


$key = "user_name";
$$key = 'ahmet123';

echo $user_name. "\n"; 