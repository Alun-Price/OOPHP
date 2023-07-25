<?php

require_once 'FileReaderInterface.php';

class CsvFileReader implements FileReaderInterface
{
  public function readFileAsAssociativeArray(string $filename): array
  {
    // get the rows from the file as arrays
    $rows = array_map('str_getcsv', file($filename));

    // separate the header
    $header = array_shift($rows);

    $items = [];

    // create an associative array, using header values as keys
    foreach($rows as $row){

      $items[] = array_combine($header, $row);
    }

    // return the associative array
    return $items;
  }
}

// $fileReader = new CsvFileReader();
// $items = $fileReader->readFileAsAssociativeArray('inventory.csv');
// print_r($items). PHP_EOL;