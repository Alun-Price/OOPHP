<?php

namespace App\Models;

class UserRepository extends ModelRepository
{
  // CREATE, READ, UPDATE, DELETE (CRUD)

  /******  CREATE *******/
  public function save(array $userData): bool {

    $sql = "INSERT INTO users (name, email, user_timezone) VALUES (:name, :email, :user_timezone)";
    $stmt = $this->getPdo()->prepare($sql);
    $stmt->execute(['name' => $userData['name'], 'email' => $userData['email'], 'user_timezone' => $userData['user_timezone']]);
   
    return $stmt->rowCount() === 1;
  }

  /******  READ *******/ 
  
  public function findAll()
  {
    $users = $this->getPdo()->query('SELECT * FROM users')->fetchAll(\PDO::FETCH_CLASS, User::class);

    return $users;
  }

  public function findById(int $id): ?User
  {
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $this->getPdo()->prepare($sql);
    $stmt->execute(['id' => $id]);
    $userArray = $stmt->fetch(\PDO::FETCH_ASSOC);

    if(!$userArray) {
      return null;
    }

    // make a user object using the $userArray
    return $this->makeUser($userArray);
  }

  /******  UPDATE *******/

  /******  DELETE *******/

  /******  UTILITY *******/
  private function makeUser(array $userData): User
  {
    $user = new User();
    $user->setId($userData['id']);
    $user->setName($userData['name']);
    $user->setEmail($userData['email']);
    $user->setUserTimezone($userData['user_timezone']);
    $user->setUpdated_at(date_create($userData['updated_at']));
    return $user;
  }
}