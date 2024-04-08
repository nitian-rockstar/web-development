<?php
// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

// Prepare data for Excel
$data = array(
    array($name, $email)
);

// Write to Excel file
$filename = 'data.xlsx';
$fp = fopen($filename, 'a'); // Open the file for writing
foreach ($data as $fields) {
    fputcsv($fp, $fields); // Write data to file
}
fclose($fp); // Close the file

// Redirect back to the form
header('Location: index.html');
exit();
?>
