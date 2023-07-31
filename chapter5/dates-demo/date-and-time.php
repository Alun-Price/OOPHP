<?php

/*********************** date() **************************************************/

echo date('Y') . PHP_EOL;  // 2023 
// Mandatory format, no of secs that have elaspsed since midnight 1 Jan 1970 - present time (called unix time)
echo date('H:i') . PHP_EOL;  // 13:36
echo date('d F Y, h:i:s A') . PHP_EOL; // 31 July 2023, 01:36:11 PM 

/*********************** time() *************************************************/

echo time() . PHP_EOL;  // 1690810705 - no args, just return the unix-time in secs

// we can plug the unix-time into a date function
echo date('d F Y H:i', 1690810705).PHP_EOL; // 31 July 2023 13:38

/*********************** strtotime() ********************************************/

$timestamp = strtotime('last day of December'). PHP_EOL;  // 1703980800 - will look at Dec this year

echo date('Y-m-d', $timestamp).PHP_EOL; // 2023-12-31 (as expected!!)

echo date('d F Y', strtotime('+ 2 days')).PHP_EOL; // 02 August, 2023 (as expected!!)

/*********************** timezones **********************************************/

$tz = date_default_timezone_get();
echo $tz. PHP_EOL; // UTC


// php --ini and change timezone in the ini file
//change timezone programmatically

echo 'The time in ' . date_default_timezone_get() . ' is ' . date('H:i:s') . PHP_EOL; 
// The time in UTC is 14:09:38
date_default_timezone_set('Asia/Damascus');
echo 'The time in ' . date_default_timezone_get() . ' is ' . date('H:i:s') . PHP_EOL;
// The time in Asia/Damascus is 17:09:38

/*********************** mktime() **********************************************/

$time = mktime(0, 0, 0, 7, 31, 2023);
echo $time . PHP_EOL; // 1690750800 - mktime spits out the unix timestamp

echo date('Y-m-d H:i:s', $time).PHP_EOL;


