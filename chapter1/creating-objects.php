<?php

class User
{
  // create properties
  public $name;
  public $username;
  public $followerCount;

}

$garyObject = new User(); // creating an object / instantiating a class


$garyObject->name = 'Gary Clarke';
$garyObject->username = '@garyclarketech';
$garyObject->followerCount = 50;

print_r($garyObject); // allows us to print out the object

$alunObject = new User();

$alunObject->name = "Alun Price";
$alunObject->username = "@AlunMPrice";
$alunObject->followerCount = 25000;

print_r($alunObject);
