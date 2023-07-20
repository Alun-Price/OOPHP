<?php

require 'CheckingAccount.php';

class PremiumCheckingAccount extends CheckingAccount
{
  public $minimumBalance = 1000;
}