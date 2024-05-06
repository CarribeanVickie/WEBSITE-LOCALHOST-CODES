<?php
//Check if a variable is greater than a certain value
$a = 5;
if ($a > 4) {
    echo 'True' . '<br>';
}

//If...Else
$b = 5;
if ($b > 6) {
    echo 'True' . '<br>';
} else {
    echo 'False' . '<br>';
}

//If...Elseif..If
$c = "Editor";
if ($c == "Admin") {
    echo "He is an Admin" . '<br>';
} elseif ($c == "User") {
    echo "He is a User" . '<br>';
} elseif ($c == "Editor") {
    echo "He is an Editor" . '<br>';
}

//Case Statement
$d = "Admin";
switch ($d) {
    case "Editor":
        echo "He is an Editor" . '<br>';
        break;
    case "Admin":
        echo "He is an Admin" . '<br>';
        break;
    case "User":
        echo "He is a User" . '<br>';
        break;
}

//Numeric array
$numericArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];

//Associative array
$associativeArray = [
    'name' => "John",
    'age' => 21,
    'hobby' => "Playing FIFA"
];

//foreach loop
$fruits = ['Banana', 'Apple', 'Orange'];
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}

//3D Array
$threeDArray = [
    [
        [1, 2, 3],
        [4, 5, 6]
    ],
    [
        [7, 8, 9],
        [10, 11, 12]
    ]
];
echo var_dump($threeDArray) . '<br>';
rsort($threeDArray);

echo '<pre>';
var_dump($threeDArray);
echo '</pre>';
