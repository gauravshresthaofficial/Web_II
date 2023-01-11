<?php
$num = readline("Enter a number: ");

$rev = 0;
while ($num > 0) {
    $remainder = $num % 10;
    $rev = $rev * 10 + $remainder;
    $num = (int)($num / 10);
}

echo "The reverse of the number is $rev";
?>
