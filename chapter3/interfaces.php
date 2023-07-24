<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interfaces</title>
</head>
<body>
  <?php 
  
    // require 'DarkSkyApiClient.php';
    require 'OpenWeatherMapClient.php';

    $weatherApiClient = new OpenWeatherMapClient();
    $forecast = $weatherApiClient->getForecast('New York')
  ?>
  <h1>Weather App</h1>
  <p><?= $forecast ?></p>
</body>
</html>