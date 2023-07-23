<?php

define('YEAR', 2023); // define outside of class

class Calendar
{
  // regular properties
  // value should vary between objects
  public string $name;
  public ?float $weeksInYear = 365 / 7; // ?type = nullable type = can accept NULL as well as float
  public int $year = YEAR;

  // Static properties
  // Value can change but remains the same (static) for class and instances
  public static $daysInFebruary = 28;

  public static $count = 0;

  public function __construct()
  {
    self::$count++;
  }

  // Class constants
  // Fixed values associated with this class
  const MONTHS_IN_YEAR = 12;

  public function getMonthsInYear()
  {
    return self::MONTHS_IN_YEAR;
  }
}

$calendar = new Calendar();

$calendar->name = 'Year Planner';

print $calendar->name . PHP_EOL; // Year Planner
print Calendar::MONTHS_IN_YEAR . PHP_EOL; // 12
print $calendar->getMonthsInYear() . PHP_EOL; // 12

// static
print Calendar::$daysInFebruary. PHP_EOL; // 28

Calendar::$daysInFebruary++;
print $calendar::$daysInFebruary . PHP_EOL; // 29

$calendar->weeksInYear = 365 / 7;
var_dump($calendar->weeksInYear); // float(52.142857142857146)