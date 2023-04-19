<?php

// Define the CSV file path and column names
$csv_file = 'users.csv';
$csv_columns = ['FirstName', 'LastName', 'Email'];

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract the form data
    $data = array(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['email']
    );

    // Open the CSV file for appending
    $file_handle = fopen($csv_file, 'a');

    // Write the data as a new CSV row
    fputcsv($file_handle, $data);

    // Close the file handle
    fclose($file_handle);

    // Redirect back to the form page
    header('Location: index.html');
    exit;
}
?>