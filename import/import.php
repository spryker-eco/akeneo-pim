<?php

function generateUniqueNumericValue($existingValues, $min, $max) {
    do {
        $uniqueValue = mt_rand($min, $max);
    } while (in_array($uniqueValue, $existingValues));
    return $uniqueValue;
}

// Configurable product count
$productCount = 10000; // Set the number of products to generate

// Path to input and output files
$inputFile = 'exported_product.csv';
$outputFile = 'extended_products_' . $productCount . '.csv';

// Read the input CSV
if (!file_exists($inputFile)) {
    die("File not found: $inputFile");
}

$data = array_map(function ($line) {
    return str_getcsv($line, ';'); // Use ";" as the delimiter
}, file($inputFile));

$header = array_shift($data); // Extract the headers

// Ensure there is at least one row of data
if (empty($data)) {
    die("No data found for processing in the file.");
}

// Use the first row as a template for duplication
$templateRow = $data[0];

// Determine the indexes for the unique fields
$gtinIndex = array_search('GTINs', $header);
$nameEnIndex = array_search('name-en_US', $header);

if ($gtinIndex === false || $nameEnIndex === false) {
    die("Required columns not found: 'GTINs', 'name-en_US'");
}

// Create arrays to track unique values
$existingGtins = [$templateRow[$gtinIndex]];
$existingEnNames = [$templateRow[$nameEnIndex]];

// Increase the number of records to the configured amount
$data = []; // Clear the data array for populating
for ($i = 0; $i < $productCount; $i++) {
    $newRow = $templateRow;

    // Generate unique 'GTINs' (numeric values, 13 characters long)
    $newRow[$gtinIndex] = generateUniqueNumericValue($existingGtins, 1000000000000, 9999999999999);
    $existingGtins[] = $newRow[$gtinIndex];

    // Generate unique 'name-en_US'
    $newRow[$nameEnIndex] = 'V7 Noise Isolating Stereo Earbuds ' . $i;

    $data[] = $newRow;
}

// Save the result to a new CSV file with ";" as the delimiter
$outputHandle = fopen($outputFile, 'w');
if ($outputHandle === false) {
    die("Failed to open file for writing: $outputFile");
}

// Write headers
fputcsv($outputHandle, $header, ';');

// Write data
foreach ($data as $row) {
    fputcsv($outputHandle, $row, ';');
}

fclose($outputHandle);

echo "File successfully created: $outputFile\n";
