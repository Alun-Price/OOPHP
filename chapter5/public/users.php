<?php 
use App\Models\UserRepository;

require_once '../vendor/autoload.php';

$userRepo = new UserRepository();

$users = $userRepo->findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Users</title>
</head>
<body>
  <div class="container" style="margin-top:50px">

    <?php if (count($users) < 1): ?>
      <div class="alert alert-warning">
        No users were found!
      </div>
    <?php endif; ?>

    <table class="table table-dark table-hover">
      <thead>
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">Name</th>
            <th scope="col">User Local Time</th>
            <th scope="col">Account Age</th>
            <th scope="col">Account Active?</th>
          </tr>
        </thead>
        <tbody class="table-group-divider" style="border-top-color:aquamarine">
            <?php foreach($users as $user): ?>
            <tr>
              <th scope="row"><?= $user->id ?></th>
              <td><?= $user->name ?></td>
              <td><?= $user->getLocalTime() ?></td>
              <td><?= $user->accountAge()->y . 'yr, ' . $user->accountAge()->m . 'm, ' . $user->accountAge()->d . 'd'  ?></td>
              <td><?= $user->isActive() ? 'Yes' : 'No' ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</body>
</html>