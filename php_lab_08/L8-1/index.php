<?php
// Set timezone to Kathmandu
date_default_timezone_set('Asia/Kathmandu');

// Create timestamp for 7:45pm on October 20, 2004 in Kathmandu
$timestamp = mktime(19, 45, 0, 10, 20, 2004);

// Format time and date string using strftime
$formatted_time = strftime("Today is day %d of %B and day %j of the year %Y. The time is %I:%M %p (also known as %H:%M)");
echo $formatted_time;
?>
