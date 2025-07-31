<?php

$first = 85;
$second = 90;
$third = 73;
$fourth = 75;
$totalgrade = ($first + $second + $third + $fourth) / 4;

    if ($totalgrade >= 90) {
        echo "Excellent";
    } 
    elseif ($totalgrade >= 75) {
        echo "Good Job";
    }
    else {
        echo "Bleh";
    }
?>