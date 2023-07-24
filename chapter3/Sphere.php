<?php
require_once 'ThreeDimensionalShape.php';

class Sphere extends ThreeDimensionalShape
{
  /**
   * Calculate the volume [V=4/3πr3]
   * 
   * @param array $dimensions
   * @return float
   */
  
  public function volume($dimensions): float
  {
    return (4/3) * pi() * pow($dimensions['radius'], 3);
  }

}