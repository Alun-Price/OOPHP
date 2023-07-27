<?php

require_once 'vendor/autoload.php';
require 'User.php';

$host = '127.0.0.1';
$dbname = 'pdo-demo';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {

  $pdo = new PDO($dsn, $user = 'root', $password = 'Username1', $options);

} catch (PDOException $PDOException) {

  throw new PDOException($PDOException->getMessage(), (int) $PDOException->getCode());
}

$stmt = $pdo->prepare('SELECT * from users WHERE email = :email AND name = :name');
$email= 'gary@example.com';
$name = 'Gary Clarke';
$stmt->execute(['email' => $email, 'name' => $name]);
$user = $stmt->fetch();

// INSERT ANOTHER ROW
$stmt = $pdo->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
$email= 'ap@test.com';
$name = 'Alun Price';
// $stmt->execute(['name' => $name, 'email' => $email ]);
// $inserted = $stmt->rowCount(); // no fetch but we can return the no. of rows changed

// UPDATE THE USERS TABLE
$sql = 'UPDATE users SET email= :email WHERE id = :id';
// $pdo->prepare($sql)->execute(['email' => 'jdoe1@example.net', 'id' => 1]);

// ALTERNATE SELECT : USING FOREACH LOOP ON TRAVERSABLE STATEMENT
$stmt = $pdo->query('SELECT name FROM users');
// foreach ($stmt as $row) {
//   echo $row['name'] . "\n"; 
// };


// using fetchColumn
$stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
$stmt->execute(['id' => 2]);
$name = $stmt->fetchColumn();

// using fetchcColumn to return the row count
$count = $pdo->query('SELECT count(*) from users')->fetchColumn();

// dd($count);

// create a User object from the returned data
$users = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_CLASS, User::class);

dd($users);