<?php
$age = 105;

if ($age >= 0 && $age <= 12) {
    echo "You are a child";
} 
else if ($age >= 13 && $age <= 17) {
    echo "You are a Teenager";
}
else if ($age >= 18 && $age <= 59) {
    echo "You are a adult";
}

else {
    echo "You need to reincarnation!";
}

?>