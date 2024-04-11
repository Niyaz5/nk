<?php
// File path to be downloaded
$file = 'android.png';

// Set headers for force download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));

// Read the file and output it to the browser
readfile($file);
?>
