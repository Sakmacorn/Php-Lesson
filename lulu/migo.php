<?php

$item = "ballpen";
$quantity = 10;
$priceperitem = 20;
$ratediscount = 0.10;
$paidamount = 300;

$totalbeforediscount = $quantity * $priceperitem;
$discountamount = $totalbeforediscount * $ratediscount;
$totalafterdiscount = $totalbeforediscount - $discountamount;
$change = $paidamount - $totalafterdiscount;

echo "Purchase Summary";
echo "<br>---------------------------------";
echo "<br>Item: $item ";
echo "<br>Quantity:  $quantity ";
echo "<br>Price Per Item:  $priceperitem ";
echo "<br>Total Before Discount:  $totalbeforediscount ";
echo "<br>Discount (10%):  $discountamount ";
echo "<br>Total After Discount:  $totalafterdiscount ";
echo "<br>Amount Paid:  $paidamount ";
echo "<br>Change:  $change ";
echo "<br>---------------------------------";

?>