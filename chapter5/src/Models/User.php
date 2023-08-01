<?php

namespace App\Models;

class User
{
  private int $id;
  private string $name;
	private string $email;
	private string $user_timezone;
  private \DateTime $created_at;
  private \DateTime $updated_at;

	public function getId() : int {
		return $this->id;
	}

	public function setId(int $id): void {
		$this->id = $id;
	}

	public function getName() : string {
		return $this->name;
	}

	public function setName(string $name): void  {
		$this->name = $name;
	}

	public function getEmail() : string {
		return $this->email;
	}

	public function setEmail(string $email): void  {
		$this->email = $email;
	}

	public function getUserTimezone() : string {
		return $this->user_timezone;
	}

	public function setUserTimezone(string $user_timezone): void  {
		$this->user_timezone = $user_timezone;
	}

	public function getCreated_at() : \DateTime {
		return $this->created_at;
	}

	public function setCreated_at(\DateTime $created_at): void  {
		$this->created_at = $created_at;
	}

	public function getUpdated_at() : \DateTime {
		return $this->updated_at;
	}

	public function setUpdated_at(\DateTime $updated_at): void  {
		$this->updated_at = $updated_at;
	}
}