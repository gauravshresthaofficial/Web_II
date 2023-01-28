<!-- Write a php program to remove element from the array of months set in random order 
(January, March, May, July, September, November, February,April,June,August,October,December) -->

<?php
// Define an array of months
$months = array("January", "March", "May", "July", "September", "November", "February", "April", "June", "August", "October", "December");

// Define the element to be removed
$remove = "June";

// Find the key of the element to be removed
$key = array_search($remove, $months);

// If the element is found in the array
if($key !== false){
    // Remove the element using the key
    unset($months[$key]);
}

// Print the remaining elements in the array
print_r($months);
?>
