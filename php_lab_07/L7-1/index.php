<?php
// Define the template file path and the output file path
$template_file = 'template.php';
$output_file = 'output.php';

// Read the content of the template file into a string
$template_content = file_get_contents($template_file);

// Define the values for the template variables
$title = 'My Page';
$bgcolor = '#ffffff';
$header = 'Welcome to my page!';
$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

// Replace the placeholders with the actual values
$template_content = str_replace('{title}', $title, $template_content);
$template_content = str_replace('{bgcolor}', $bgcolor, $template_content);
$template_content = str_replace('{header}', $header, $template_content);
$template_content = str_replace('{content}', $content, $template_content);

// Write the modified content to the output file
file_put_contents($output_file, $template_content);




?>