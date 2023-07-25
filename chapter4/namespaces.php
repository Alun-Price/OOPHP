<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Namespaces</title>
</head>
<body>
  <?php 
    use Database\MySQL\Connection as MySqlConnection;
    use Database\PostgreSQL\Connection as PostgreSqlConnection;
    require 'Database/MySQL/Connection.php';
    require 'Database/PostgreSQL/Connection.php';

    $mySqlConnection = new MySqlConnection();
    $postgreSqlConnection = new PostgreSqlConnection();
  ?>
  <h1>Database Connections</h1>
  <ul>
    <li><?= $mySqlConnection->getDatabaseUrl() ?></li>
    <li><?= $postgreSqlConnection->getDatabaseUrl() ?></li>
  </ul>
</body>
</html>