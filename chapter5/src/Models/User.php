<?php

namespace App\Models; // not expected as doesn't follow folder structure

class User
{
  private int $id;
  private string $name;
	private string $email;
  private \DateTime $created_at;

	public function getId() : int {
		return $this->id;
	}

	public function setId(int $value) {
		$this->id = $value;
	}

	public function getName() : string {
		return $this->name;
	}

	public function setName(string $value) {
		$this->name = $value;
	}

	public function getEmail() : string {
		return $this->email;
	}

	public function setEmail(string $value) {
		$this->email = $value;
	}

	public function getCreated_at() : \DateTime {
		return $this->created_at;
	}

	public function setCreated_at(\DateTime $value) {
		$this->created_at = $value;
	}
}