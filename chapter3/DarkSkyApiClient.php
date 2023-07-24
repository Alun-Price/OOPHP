<?php

require 'WeatherApiClientInterface.php';

class DarkSkyApiClient implements WeatherApiClientInterface
{
  public function getForecast(string $city)
  {
    // Get lat and log of the city

    // return some kind of response
    return 'It is raining in '.$city;
  }
}