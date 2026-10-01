<?php

echo PHP_INT_MAX . "\n";

var_dump(PHP_INT_MAX + 1);


$hex_num = 0x1A;
$bin_num = 0b1101;

echo $hex_num . " " . $bin_num . "\n";


$one_million = 1_000_000;

var_dump($one_million);

$a = 0.1 + 0.2;
var_dump($a==0.3);


$infinite_num = log(0);
var_dump($infinite_num);


$math_op_that_not_calculatable = acos(8);
var_dump($math_op_that_not_calculatable);


$floorTest = (int) 7.99;
var_dump($floorTest);


var_dump((bool) 0);
var_dump((bool) 0.0);
var_dump((bool) "");
var_dump((bool) "0");
var_dump((bool) []);
var_dump((bool) null);

var_dump((bool) "0");
var_dump((bool) "00");
var_dump((bool) "0.0");
