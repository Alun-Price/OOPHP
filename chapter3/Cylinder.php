<?php
require_once 'ThreeDimensionalShape.php';

class Cylinder extends ThreeDimensionalShape
{
  /**
   * Calculate the volume [V=πr2h]
   * 
   * @param array $dimensions
   * @return float
   */
  
  public function volume($dimensions): float
  {
    return pi()* pow($dimensions['radius'], 2) * $dimensions['height'];
  }

}