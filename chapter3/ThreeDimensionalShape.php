<?php

abstract class ThreeDimensionalShape
{
  abstract public function volume(array $dimensions): float;
}