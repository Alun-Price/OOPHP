<?php

require_once 'vendor/autoload.php';

final class GeneralPurposeCalculator
{

  public function calculatePercentage($part, $whole): float
  {
    return $part / $whole * 100;
  }
}

class FinanceCalculator extends GeneralPurposeCalculator
{

  public function calculatePercentage($a, $b): float
  {
    return $a / ($b * 100);
  }
}


$generalPurposeCalculator = new GeneralPurposeCalculator();
$financeCalculator = new FinanceCalculator();

$part = 5;
$whole = 15;

$result = $generalPurposeCalculator->calculatePercentage($part, $whole);
$result2 = $financeCalculator->calculatePercentage($part, $whole);
dd($result, $result2);