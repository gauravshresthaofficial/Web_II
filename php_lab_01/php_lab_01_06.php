<?php
$num = readline("Enter a number: ");

if ($num == 2) {
    echo "$num is a prime number";
} elseif ($num > 2) {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            echo "$num is not a prime number";
            break;
        }
    }
    echo "$num is a prime number";
} else {
    echo "$num is not a prime number";
}
?>
