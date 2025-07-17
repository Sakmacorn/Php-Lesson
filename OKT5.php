<?php

$a = 10;
$b = 20;
$c = 30;
$d = 40;

$add = $a + $b;
$sub = $c - $b;
$mul = $a * $d;
$div = $d / $b;
$total = $add + $sub + $mul + $div;
$average = $total / 4;

echo "Addition of $a and $b: ". $add;
echo "<br> Subtraction of $c and $b: ". $sub;
echo "<br> Multiplication of $a and $d: ". $mul;
echo "<br> Division of $d and $b: ". $div;

echo "<br>Total of all operations: ". $total;
echo "<br>Average of all results: ". $average;

?>
