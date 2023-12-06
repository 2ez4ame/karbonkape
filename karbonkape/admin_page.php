<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="text-bg-success p-3" style="text-align: center;">Web-based Checkup and Herbal Prescripition Recommendation System</div>

<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Email: <?php echo $_SESSION['admin_email']; ?></p>
      
      <a href="logout.php" class="btn">logout</a>
      <a href="dashboard.php" class="btn">Dashboard</a>
   </div>

</div>

</body>
</html>