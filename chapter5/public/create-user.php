<?php
use App\Models\UserRepository;

require_once './../vendor/autoload.php';

$success = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userRepo = new UserRepository();
    $success = $userRepo->save($_REQUEST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Create A User
  </title>
</head>
<body>
  <div class="container" style="margin-top: 50px">
    <?php if($success): ?>
      <div class="alert alert-success">
        Success! The user has been added to the database.
      </div>
    <?php endif; ?>
    <form method="post" action="create-user.php">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="inputName">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="inputEmail">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
</body>
</html>