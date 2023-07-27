<?php

namespace App\Models;

class UserRepository
{

  private $pdo;

  private function getPdo(): \PDO
  {
    if($this->pdo === null) { // check if other connection running
        $options = [
          \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
          \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ];

        try {

          $this->pdo = new \PDO("mysql:host=127.0.0.1;dbname=pdo-demo;charset=utf8mb4",'root', 'Username1', $options);

        } catch (\PDOException $PDOException) {

          throw new \PDOException($PDOException->getMessage(), (int) $PDOException->getCode());
        }
    }

    return $this->pdo;
  }


  public function save(array $userData): bool {

    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $this->getPdo()->prepare($sql);
    $stmt->execute(['name' => $userData['name'], 'email' => $userData['email']]);
   
    return $stmt->rowCount() === 1;
  }
}