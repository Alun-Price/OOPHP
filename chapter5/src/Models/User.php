<?php

namespace App\Models;

class User
{
  private int $id;
  private string $name;
	private string $email;
	private string $user_timezone;
  private \DateTime|string $created_at;
  private \DateTime|string $updated_at;

	public function __get($property)
	{
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}


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
		return new \DateTime($this->created_at);
	}

	public function getUpdated_at() : \DateTime {
		return new \DateTime($this->updated_at);
	}

	public function setUpdated_at(\DateTime $updated_at): void  {
		$this->updated_at = $updated_at;
	}

	public function getLocalTime() {
		return date_create('now', new \DateTimeZone($this->user_timezone))->format('H:i');
	} 

	public function accountAge(): \DateInterval
	{
		return date_diff(date_create('now'), $this->getCreated_at());
	} 


	/**
	 * Is the account active
	 * 
	 * Rules:
	 * The account is active if
	 * a) account < 90 days old OR
	 * b) the account >= 90 days old AND it was updated in < 90 days
	 * 
	 * @return bool
	 *  
	 */

	public function isActive(): bool
	{
		if ($this->accountAge()->days < 90) {
			return true;
		}

		$lastUpdatedInterval = date_diff(date_create('now'), $this->getUpdated_at());

		return $lastUpdatedInterval->days < 90;
	}
}