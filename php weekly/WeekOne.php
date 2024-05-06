<?php
//Declare variables
$a = 5;
$b = 6.34;
$c = "John";

//PHP Operators
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a != $b . '<br>'; //true
echo $a == $b . '<br>'; //false
echo $a === $b . '<br>'; //false

//Concatenation
$d = "Jane";
$e = " codes ";
$f = " in ";
$g = "Python";
echo $d . $e . $f . $g.'<br>';

//strlen() and strpos() functions
$h = $d . $e . $f . $g;
echo strlen($d).'<br>';
echo strpos($h,"codes").'<br>';