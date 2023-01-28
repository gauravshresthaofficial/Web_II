<!-- create a php function that accepts the list of countries and search value as parameters
and checks whether the searched value exists in the list or not. And display the output. 
Note: Call the function for true and false conditions. -->

<?php

function searchCountry($countries, $searchValue) {
    if (in_array($searchValue, $countries)) {
        echo "The value '$searchValue' was found in the list of countries.";
    } else {
        echo "The value '$searchValue' was not found in the list of countries.";
    }
}

// Example list of countries
$countries = array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola");

// Call the function with a value that exists in the list
searchCountry($countries, "Albania");
// Output: The value 'Albania' was found in the list of countries.

// Call the function with a value that does not exist in the list
searchCountry($countries, "Antarctica");
// Output: The value 'Antarctica' was not found in the list of countries.

