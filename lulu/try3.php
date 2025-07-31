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

?>
