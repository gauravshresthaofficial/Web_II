<?php
$month = readline("Enter a month (in numeric form): ");
$year = readline("Enter a year: ");

if ($month == 2) {
    if ($year % 4 == 0) {
        echo "29 days";
    } else {
        echo "28 days";
    }
} elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
    echo "30 days";
} else {
    echo "31 days";
}
?>
