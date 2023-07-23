<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  require 'Connection.php';

  // __construct called behind the scenes
  $connection = new Connection();
  $connection->setConnectionId('127.0.0.1');
  print $connection;
  $connection2 = new Connection();
  // unset($connection2);
  // unset($connection1);
  
  ?>

  <p><?= 'The number of connections is ' . $connection->getConnectionCount()?></p>
</body>
</html>