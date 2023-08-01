<?php

use App\Models\UserRepository;

require_once './../vendor/autoload.php';

$user = null;

if($id = $_GET['id'] ?? false) {
  
  $repo = new UserRepository();
  $user = $repo->findById($id);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show A User</title>
</head>
<body>
  <div class="container" style="margin-top: 50px">
    <?php if($user): ?>
      <h3><?= "Name: {$user->getName()}, Email: {$user->getEmail()}"; ?></h3>
    <?php else: ?>
      <h3>Sorry. No user with that id could be found!!</h3>

    <?php endif; ?>

  </div>
</body>
</html>