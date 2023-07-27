<?php

namespace App\Models; // not expected as doesn't follow folder structure

class User
{
  private int $id;
  private string $name;

	public function getId() : int 
  {
		return $this->id;
	}

	public function setId(int $value) 
  {
		$this->id = $value;
	}

	public function getName() : string 
  {
		return $this->name;
	}

	public function setName(string $value) 
  {
		$this->name = $value;
	}
}