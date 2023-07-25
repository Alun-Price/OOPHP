<?php

namespace App\Users;
use App\Logging\LoggableTrait;
use App\Logging\Logger;

class Customer
{
  use LoggableTrait;

  public function setLogger(Logger $logger)
  {
    echo 'Called from Customer <br>';

    $this->logger = $logger;
  }
}