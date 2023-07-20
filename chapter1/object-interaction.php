<?php

// create a song class
// create songId and title public properties
// instantiate an "Octopus's Garden" song using the new keyword
// var_dump and check in the browser

class Song
{
  public $songId;
  public $title;
}

$newSong = new Song();

$newSong->songId = 1;
$newSong->title = "Octopus's Garden";

// var_dump($newSong);


class Playlist 
{
  public $name;
  public $songs = [];

  public function addSong($song) {
    $this->songs[] = $song;  // adds a song to the array
  }
}

$playlist = new Playlist();
$playlist->name = 'Rock!';
$playlist->addSong($newSong);
var_dump($playlist);