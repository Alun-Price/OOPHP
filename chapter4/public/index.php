<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autoloading</title>
</head>
<body>
  <?php 

  use App\Connection\MySqlConnection;
  use App\Utility\RandomUtilityClass;
  use App\Calculators\Calculator;
  use App\Users\Customer;
  use App\Logging\Logger;
  use App\Conference\Attendee;
  use APP\Conference\Host;
  
  include 'autoload.php';

  $mySqlConnection = new MySqlConnection();
  $utility = new RandomUtilityClass();

  $logger = new Logger();
  $customer = new Customer();
  $customer->setLogger($logger);

  $gary = new Host();
  
  ?>
  <p><?= $mySqlConnection->getDatabaseUrl() ?></p>
  <p><?= $utility->status ?></p>
  <p><?= $customer->getLogger()->log()?></p>
  <p><?= $gary->getMeta(); ?></p>
</body>
</html>