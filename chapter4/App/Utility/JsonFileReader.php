<?php

namespace App\Utility;

use App\Exceptions\FileNotFoundException;
use App\Exceptions\BadJsonException;

class JsonFileReader
{
  public function readFileAsAssociativeArray(string $filename): array
  {
    if(!file_exists($filename)) {

      throw new FileNotFoundException('The file : '. $filename . ' could not be found');
    }

    // Get file content as json string
    $content = file_get_contents($filename);

    // decode into an associative array (items)
    $items = json_decode($content, true);

    if(!isset($items)) {

      throw new BadJsonException('The content of ' . $filename . ' could not be decoded into an array ');
    }

    return $items;
  }
}