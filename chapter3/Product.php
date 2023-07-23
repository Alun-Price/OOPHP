<?php
require_once 'DataModel.php';

class Product extends DataModel
{
  private string $name;
  private float $price;
  protected string $tableName = 'products'; 

	public function getName() : string {
		return $this->name;
	}

	public function setName(string $value) {
		$this->name = $value;
	}

	public function getPrice() : float {
		return $this->price;
	}

	public function setPrice(float $value) {
		$this->price = $value;
	}
}