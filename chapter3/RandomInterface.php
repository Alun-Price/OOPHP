<?php

interface RandomInterface
{
  # code...
}

class A implements RandomInterface {}

class B extends A
{


}

$a = new A();
$b = new B();

if($a instanceof A) {
  echo 'True'. PHP_EOL;
} else {
  echo 'False'. PHP_EOL;
}