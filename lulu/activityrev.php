<?php

$price_per_unit = 500;
$subject_unit1 = 3;
$subject_unit2 = 5;
$subject_unit3 = 4;

$total_units = $subject_unit1 + $subject_unit2 + $subject_unit3;
$total_tuition = $price_per_unit * $total_units;


if ($total_tuition >= 10000) {
    $discount = $total_tuition * 0.15;
} elseif ($total_tuition >= 9999) {
    $discount = $total_tuition * 0.10;
} elseif ($total_tuition >= 5000 && 7999.99) {
    $discount = $total_tuition * 0.05;
} else {
    $discount = 0;
}

$final_tuition = $total_tuition - $discount;

echo "<br>Total Units: $total_units";
echo "<br>Total Tuition: $total_tuition";
echo "<br>Discount Applied: $discount";
echo "<br>Final Tuition to Pay: $final_tuition";

?>
