<?php

$Gender = "female";
$Age = 18;

if ($Gender == "male") {
    
    if ($Age == 21) {
       echo "You are a Male Debutant";
    } 
    else {
        echo "You are not Male Debutant";
    }
} 

//Female
elseif ($Gender == "female") {

    if ($Age == 18) {
        echo "You are a Female Debutant";
    } 
    else {
        echo "You are not Female Debutant";
    }
}

else {
    echo "You are a Female Debutant";
}

// $Item = "Meat";
// $Quantity = 5;
// $Price = 200;
// $discount = 0.20;
// $PaidAmount = 500;

// $BeforeDiscount = $Price * $Quantity;
// $discountamount = $BeforeDiscount * $discount;
// $AfterDiscount = $BeforeDiscount - $discountamount;
// $Change = $AfterDiscount - $PaidAmount;

// echo "<br>Your Item is: $Item";
// echo "<br>Quantity is: $Quantity";
// echo "<br>Price: $Price";
// echo "<br>Discount (20%): $discount";
// echo "<br>Paid Amount: $PaidAmount";

// echo "<br>Before Discount: $BeforeDiscount";
// echo "<br>After Discount: $AfterDiscount";
// echo "<br>Change: $Change";






?>
