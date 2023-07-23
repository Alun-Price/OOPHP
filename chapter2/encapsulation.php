<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    require 'Bid.php';

    $bid = new Bid();
    $bid->setBidAmount(10);
  ?>

  <p><?= 'The bid amount is ' . $bid->getBidAmount(); ?></p>
</body>
</html>