<?php

$Gender = "Male";
$Age = 10;

if ($Age >= 21 && $Gender === "Male") {
    echo "You are a Male Debutant";
} elseif ($Age >= 18 && $Gender === "Female") {
    echo "You are a Female Debutant";
} else {
    echo "omsim";
}

?>
