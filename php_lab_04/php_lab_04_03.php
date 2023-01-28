<!-- Create a function that returns the first 10 fibonacci numbers and also display them in unordered list -->

<?php

function fibonacci() {
    $fib = array(0, 1);
    for ($i = 2; $i < 10; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    echo "<ul>";
    foreach ($fib as $num) {
        echo "<li>$num</li>";
    }
    echo "</ul>";
    return $fib;
}

$result = fibonacci();
 

