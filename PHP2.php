<?php
declare(strict_types=1);

$isStudent = True;
$itemCount = 5;
$totalPrice = 3.55;
$productName = 'Iphone 15 pro';

echo gettype($isStudent) . "\n";
echo gettype($itemCount) . "\n";
echo gettype($totalPrice) . "\n";
echo gettype($productName) . "\n";

var_dump($isStudent);
var_dump($itemCount);
var_dump($totalPrice);
var_dump($productName);


$scores = [85, 90.5, "Passed", true];

var_dump($scores);
// print_r($scores);

$emptyValue = null;
//$unassignedValue ;

var_dump($emptyValue);
//var_dump($unassignedValue);
// Warning: Undefined variable $unassignedValue in C:\Users\User\Desktop\php-learning-journey\PHP2.php on line 29
//NULL

$numStr = "50";
$quantity = 10;

$total = $numStr + $quantity;

echo $total . "\n";

echo gettype($total) . "\n";


$greeting = "Score: " . 100;
echo gettype($greeting) . "\n";


$boolVal = true;
$result = $boolVal + 5;

echo $result . "\n" . gettype($result) . "\n";


$price = 99.99;
$priceInt = (int) $price;

echo $price . "\n" . $priceInt . "\n";


$amount = 250;

$amountStr = (string) $amount; 

var_dump($amountStr);

$zero = 0;
$zeroBool = (bool) $zero;

var_dump($zeroBool);

// declare(strict_types=1);
// Fatal error: strict_types declaration must be the very first statement in the script in C:\Users\User\Desktop\php-learning-journey\PHP2.php on line 70
// Stack trace:
// #0 {main}

function multiply(int $a, int $b): int {
    $total = $a* $b;
    return $total;
}

// multiply(5, "10");

// Fatal error: Uncaught TypeError: multiply(): Argument #2 ($b) must be of type int, string given, called in C:\Users\User\Desktop\php-learning-journey\PHP2.php on line 80 and defined in C:\Users\User\Desktop\php-learning-journey\PHP2.php:75
// Stack trace:
// #0 C:\Users\User\Desktop\php-learning-journey\PHP2.php(80): multiply(5, '10')
// #1 {main}
//   thrown in C:\Users\User\Desktop\php-learning-journey\PHP2.php on line 75

echo multiply(5, 10);