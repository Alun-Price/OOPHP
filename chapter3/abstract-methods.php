<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abstract Methods</title>
</head>
<body>
  <?php 
    require_once 'Cylinder.php';
    $cylinder = new Cylinder();
    $cylinderVolume = $cylinder->volume(["radius"=>5, "height"=>10]);

    require_once 'Sphere.php';
    $sphere = new Sphere();
    $sphereVolume = $sphere->volume(["radius"=>5]);

    echo 'The volume of the cylinder is &nbsp;: &nbsp;  '.number_format((float)$cylinderVolume, 3, '.', '') . ' &#13221; <br><br>';
    echo 'The volume of the sphere is &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;'.number_format((float)$sphereVolume, 3, '.', '') . ' &#13221;';
  
  ?>
</body>
</html>