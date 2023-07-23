<?php 

class Reservation 
{

  private $host = 'Host';  // Host class
  private $guest = 'Guest class';  // Guest class
  
  // cancel
  public function cancel() 
  {
    $this->sendCancellationNotification();

    $this->refundGuest();

    echo 'And a lot of other stuff that you dont see!!';
  }

  private function sendCancellationNotification()
  {
    echo 'Sending notification to ' . $this->host. '<br>';
  }

  private function refundGuest()
  {
    echo 'Refunding '. $this->guest. '<br>';
  }
}