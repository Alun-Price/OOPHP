<?php

require_once '../vendor/autoload.php';

/******************** DateTime ****************************************/

$dateTime = new DateTime();  // representation of Date and Time
$dateTime = new DateTime('last day of May');  // "2023-05-31"


dd($dateTime->format('Y-m-d')); // "2023-07-31"
dd($dateTime->format(DateTime::ISO8601_EXPANDED)); // "+2023-05-31T00:00:00+00:00" - see docs for codes


/********************* Comparisons ***********************************/

$today = date_create('today');
$nextweek = date_create('next week');
dd($nextweek > $today); // true
dd($nextweek == $today); // false

/**********************  FORMAT  ********************************/

$dateTime = DateTime::createFromFormat('j-M-Y', '21-Jan-2010');
dd($dateTime); //  date: 2010-01-21 23:07:16.0 UTC (+00:00)

/*********************** Diff  **********************************/

$past = date_create('1999-12-31');
$present = date_create();

$interval = $present->diff($past);
dd($interval);

// DateInterval {#8
//   interval: + 23y 7m 23:11:37.092311
//   +"y": 23
//   +"m": 7
//   +"d": 0
//   +"h": 23
//   +"i": 11
//   +"s": 37
//   +"f": 0.092311
//   +"invert": 0
//   +"days": 8613
//   +"from_string": false
// }

// Note: invert indicates whether we are looking forward or backward in time

$years = $interval->y;

if ($interval->invert) {
 $years = -$interval->y;
}

dd($years); // 23 - but will be -23 if we swap $past and $present

// Another way to do this is to use %r

dd($interval->format('%r%Y'));  // "23" or "-23" if we reverse $past and $present

dd((int) $interval->format('%r%Y')); // cast as integer if you don't want a string 23 or -23

//  We can achieve the above using the date_diff function
$interval = date_diff($present, $past);
dd($interval);

// DateInterval {#9
//   interval: - 23y 7m 23:27:44.486942
//   +"y": 23
//   +"m": 7
//   +"d": 0
//   +"h": 23
//   +"i": 27
//   +"s": 44
//   +"f": 0.486942
//   +"invert": 1
//   +"days": 8613
//   +"from_string": false
// }

// want to make a string out of the interval!!
dd("$interval->y years, $interval->m months, $interval->d days"); // "23 years, 7 months, 0 days"

 $interval = new DateInterval('P23Y7M0D'); // weird format relates to the period in the interval
 $past->add($interval);  // adding the interval to the past should bring you up to today!!!
dd($past->format('Y-m-d'));  // 2023-07-31 = today as expected

 $plusThreeDays = new DateInterval('P3D');
 $present->add($plusThreeDays);
 dd($present->format('Y-m-d')); // 2023-08-03 = three days time

// if you wanted to take away 3 days instead you can't just say 'P-3D' - use sub
$present->sub($plusThreeDays);
dd($present->format('Y-m-d')); // 2023-07-28 = minus three days time

// use human readable string to make the interval
$interval = date_interval_create_from_date_string('+ 3 days'); //Note:doesn't give you loads of interval info
$present->add($interval);
dd($present->format('Y-m-d')); // 2023-08-04

$date = $present->modify('-5 days')->format('ga jS M Y');  // modify like add but takes a string
dd($date); //  "12am 27th Jul 2023"


/********************  DateTimeImmutable ************/

$start = new DateTime('2021-01-01');
$finish = $start->add(new DateInterval('P3D'));

dd($finish->format('Y-m-d')); // 2021-01-04 as expected
dd($start->format('Y-m-d')); // 2021-01-04 as expected BUT we may not want the $start value to change so
// we use a  DateTimeImmutable
$start = new DateTimeImmutable('2021-01-01');
$start->add(new DateInterval('P3D'));
dd($start->format('Y-m-d'));  // stays as 2021-01-01

/********************  Timezone ************/

$chita = new DateTime('now', new DateTimeZone('Asia/Chita'));
$utc= new DateTime('now', new DateTimeZone('UTC'));

dd($chita, $utc);

// DateTime @1690849631 {#11
//   date: 2023-08-01 09:27:11.019584 Asia/Chita (+09:00)
// }
// 2^ DateTime @1690849631 {#10
//   date: 2023-08-01 00:27:11.019589 UTC (+00:00)
// }