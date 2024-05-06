<?php
//While
$x = 5;
while ($x < 10) {
    echo "Hello World" . '<br>';
    $x++;
}

//Do...While
$a = 6;
do {
    echo "Hello PHP" . '<br>';
    $a++;
} while ($a < 10);

//For
for ($i = 0; $i < 10; $i++) {
    echo "Hello Joseph" . '<br>';
}

//Foreach Loop
$fruits = ['Banana', 'Apple', 'Orange'];
foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
}

//Functions
function sum($a, $b)
{
    echo $a + $b . '<br>';
}

sum(1, 2);

function hello()
{
    echo "Hello World" . '<br>';
}

hello();

//return values of a PHP function
function sum1($a,$b)
{
    return $a + $b;
}
echo sum1(1,3);