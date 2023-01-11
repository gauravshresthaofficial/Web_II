<?php
$num = readline("Enter a number: ");

$temp = $num;
$sum = 0;
while ($temp > 0) {
    $remainder = $temp % 10;
    $sum = $sum + $remainder * $remainder * $remainder;
    $temp = (int)($temp / 10);
}

if ($num == $sum) {
    echo "$num is an Armstrong number";
} else {
    echo "$num is not an Armstrong number";
}
?>
