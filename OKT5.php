<?php

//Option 1
$add = 23;
$sub = 22;
$mul = 5;
$div = 10;

 echo "Addition: ". ($add + $sub);   
 echo "<br>The minimum in mabalacat is ". ($add / $div);


 //Option 2
$tax = 0.15;
$gross_pay = 5000;

$tax_amount = $gross_pay * $tax;

echo "<br> Your Tax Deduction is: ". $tax_amount;

//Option 3
$base_amount = 500;
$percentage = 15;

$tax_rate = $percentage / 100;

$tax_amount = $base_amount * $tax_rate;

$total = $base_amount + $tax_amount;

echo "<br>Base amount: $". $base_amount;
echo "<br>Tax Percentage: ". $tax_rate;

?>