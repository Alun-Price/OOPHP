<?php

require 'WeatherApiClientInterface.php';

class OpenWeatherMapClient implements WeatherApiClientInterface
{
  public function getForecast(string $city)
  {
    // Call Open Weather Map
    // ...

    // Return some kind of response
    return 'It is raining in '.$city;
  }
}