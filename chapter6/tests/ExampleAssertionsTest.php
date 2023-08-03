<?php

use PHPUnit\Framework\TestCase;

class ExampleAssertionsTest extends TestCase
{

  public function testThatStringsMatch()
  {
    $string1 = 'testing';
    $string2 = 'testing';

    $this->assertSame($string1, $string2);
  }

  public function testThatNumbersAddUp()
  {
    $this->assertEquals(10, 5 + 5);
  }

}