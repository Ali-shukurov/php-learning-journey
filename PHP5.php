<?php

$studentScores = [
    'Math' => 88, 
    'Literature' => 76, 
    'Philosophy' => 94,
    'Foundation' => 97,
    'Management' => 89,
    ];

echo $studentScores["Math"] . "\n";

echo $studentScores["German Language"] . "\n";
/**
* Warning: Undefined array key "German Language" in 
* C:\Users\User\Desktop\php-learning-journey\PHP5.php on line 13
*/

$studentScores['Literature'] = 82;
print_r($studentScores);


$studentScores['Web Programming'] = 87;
print_r($studentScores);


echo count($studentScores) . "\n";

print_r($studentScores);


$shoppingCart = [
    'Laptop'=> [
        'Brand' => 'Acer',
        'Price' => 1350 . "\$",
        'inStock' => 5
    ],
    'Mouse' => [
        'Brand' => 'A4tech',
        'Price' => 15 . "\$",
        'inStock' => 12
    ],
    'Keyboard' => [
        'Brand' => 'Hp keyboard',
        'Price' => 23 . "\$",
        'inStock' => 17
    ],
    'Headphones' => [
        'Brand' => 'SPP',
        'Price' => 35 . "\$",
        'inStock' => 23
    ],
];

print_r($shoppingCart);


$shoppingCart['Router'] = [
    'Brand' => '3Com',
    'Price' => 60 . "\$",
    'inStock' => 3,
    ]; 

print_r($shoppingCart);

$shoppingCart['Router']['Price'] = 54.99 ;
print_r($shoppingCart);


echo count($shoppingCart) . "\n";


$shoppingCart['Phone'] = [
    'Brand' => 'Samsung',
    'Price' => 560 . "\$",
    'inStock' => 35,
    ]; 

print_r($shoppingCart);

array_shift($shoppingCart);
print_r($shoppingCart);

array_pop($shoppingCart);
print_r($shoppingCart);

unset($shoppingCart['Router']);
print_r($shoppingCart);

//I learn just these way in last video
var_dump(isset($shoppingCart['Router']));
print_r($shoppingCart);

$users = [
    0 => [
        'Name' => 'Ali',
        'Email' => 'aliko@gmail.com',
        'Role' => 'Backend Developer Intern',
        'Age' => 20
    ],
    1 => [
        'Name' => 'Ugur',
        'Email' => 'ugur17@gmail.com',
        'Role' => 'Backend Developer',
        'Age' => 26
    ],
    2 => [
        'Name' => 'Aysel',
        'Email' => 'ays123@gmail.com',
        'Role' => 'Frontend Developer',
        'Age' => 28,
        'Phone' => '0516989050'
    ],
    3 => [
        'Name' => 'Yalcin',
        'Email' => 'codebro@gmail.com',
        'Role' => 'IT Team Leader',
        'Age' => 35,
        'Phone' => '0506740990'
    ],
    4 => [
        'Name' => 'Emil',
        'Email' => 'shel34@gmail.com',
        'Role' => 'IT Director',
        'Age' => 39
    ],
];

print_r($users);

$users[2]['Email'] = 'ays.kosmos@gmail.com';
print_r($users[2]);

$users[0]['Role'] = 'Backend Developer';
print_r($users[0]);


$users[] = [
    'Name' => 'Huseyn',
    'Email' => 'huso@gmail.com',
    'Role' => 'Backend Developer Intern',
    'Age' => 16
];

print_r($users);


unset($users[0]);
print_r($users);


var_dump(isset($users[1]['Role']));
print_r($users);


echo $users[1]['LastName'] . "\n";
/** 
* Warning: Undefined array key "LastName" in C:\Users\User\Desktop\php-learning-journey\PHP5.php on line 154
*/

echo count($users) . "\n";
print_r($users);


function isSetPhone(array $arr, int $indx): string {
    if (isset($arr[$indx]['Phone'])) {
        return "This user - {$arr[$indx]['Name']}:  has a phone number";
    } 
    else{
        return "This user - {$arr[$indx]['Name']}:  has not a phone number";
    }  
};


echo isSetPhone($users, readline("Please enter a valid index for checking phone number: "));
