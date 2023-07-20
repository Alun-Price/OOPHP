<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inheritance</title>
</head>
<body>
  <?php 
    require 'PremiumCheckingAccount.php';

    $premiumCheckingAccount = new PremiumCheckingAccount();
    
    echo 'Minimum balance on Premium Checking Account : ' .$premiumCheckingAccount->minimumBalance . '<br>';
    
    $premiumCheckingAccount->deposit(20);

    $premiumCheckingAccount->withdraw(10);
    
    $premiumCheckingAccount->transfer(100);
  
  ?>
</body>
</html>