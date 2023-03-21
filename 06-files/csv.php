<?php

$csv_file_name = 'Business-employment-data-september-2022-quarter-csv.csv';

$handle = fopen($csv_file_name, 'r');

$data = fgetcsv($handle, ',');

while (($data = fgetcsv($handle, ',')) !== false)
{
    echo $data;
}

fclose($handle);