<?php

// Define the file paths for input and output files
$input_file = 'addresses.txt';
$output_file = 'addresses-count.txt';

// Read the input file into an array of lines
$lines = file($input_file);

// Count how many times each address appears in the input file
$counts = array();
foreach ($lines as $line) {
    $address = trim($line);
    if (isset($counts[$address])) {
        $counts[$address]++;
    } else {
        $counts[$address] = 1;
    }
}

// Sort the counts array by the count in descending order
arsort($counts);

// Write the results to the output file
$output_handle = fopen($output_file, 'w');
foreach ($counts as $address => $count) {
    fwrite($output_handle, "$address,$count\n");
}
fclose($output_handle);

echo "Done!\n";

?>