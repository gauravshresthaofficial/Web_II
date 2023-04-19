<?php
// Set timezone to Kathmandu
date_default_timezone_set('Asia/Kathmandu');

// Create timestamp for 7:45pm on October 20, 2004 in Kathmandu
$timestamp = mktime(19, 45, 0, 10, 20, 2004);

// Format time and date string using date
$formatted_time = "Today is day " . date("d", $timestamp) . " of " . date("F", $timestamp) . " and day " . date("z", $timestamp) . " of the year " . date("Y", $timestamp) . ". The time is " . date("h:i A", $timestamp) . " (also known as " . date("H:i", $timestamp) . ")";
echo $formatted_time;
?>
