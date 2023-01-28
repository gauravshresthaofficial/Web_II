<!-- Write a php program to add only the unique values from the list below and display them in numbered list in descending order
(Red Marble,Green Marble, White Marble,Red Marble, Blue Marble,White Marble, Gray Marble) -->

<?php
// Define an array of marbles
$marbles = array("Red Marble", "Green Marble", "White Marble", "Red Marble", "Blue Marble", "White Marble", "Gray Marble");

// Define an empty array to store the unique marbles
$uniqueMarbles = array();

// Iterate through the array of marbles
foreach ($marbles as $marble) {
    // Check if the marble is not already in the unique marbles array
    if (!in_array($marble, $uniqueMarbles)) {
        // Add the marble to the unique marbles array
        $uniqueMarbles[] = $marble;
    }
}

// Sort the unique marbles array in descending order
rsort($uniqueMarbles);

// Display the unique marbles in a numbered list
echo "<ol>";
foreach ($uniqueMarbles as $marble) {
    echo "<li>$marble</li>";
}
echo "</ol>";
?>
