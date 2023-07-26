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
  use App\Conference\Host;
  use App\Utility\JsonFileReader;
  use App\Exceptions\BadJsonException;
  use App\Exceptions\FileNotFoundException;
  
  include 'autoload.php';

  $mySqlConnection = new MySqlConnection();
  $utility = new RandomUtilityClass();

  $logger = new Logger();
  $customer = new Customer();
  $customer->setLogger($logger);

  $gary = new Host();

  $jsonFileReader = new JsonFileReader();

  $filename = './../../chapter3/inventory.json';

  try {
    
    $inventory = $jsonFileReader->readFileAsAssociativeArray($filename);
    print_r($inventory);

  } catch(FileNotFoundException | BadJsonException $exception) {

    print_r('The file '. $filename . ' could not be processed. Please check the filepath and content. ');
  
  } catch (Exception $exception) {

    print_r($exception->getMessage() . ' in file ' . $exception->getFile() . ' on line ' . $exception->getLine());

  } finally {
    
    print_r(PHP_EOL . 'Some final processing ...');
  }

  
  ?>
  <p><?= $mySqlConnection->getDatabaseUrl() ?></p>
  <p><?= $utility->status ?></p>
  <p><?= $customer->getLogger()->log()?></p>
  <p><?= $gary->getMeta(); ?></p>
</body>
</html>