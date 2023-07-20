<?php
require 'Account.php';

class CheckingAccount extends Account
{
  public function transfer($amount)
  {
    echo 'Transferring '. $amount . '<br>';
  }
}