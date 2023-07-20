<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    require 'Comment.php';

    $comment = new Comment('This is some comment text!', 10);

  ?>
    <p>
      <?= $comment->text ?><br />
      by the user <?= $comment->userId ?>
    
    </p>
</body>
</html>