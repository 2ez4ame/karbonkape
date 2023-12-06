<?php

@include 'config.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="text-bg-success p-3" style="text-align: center;">Web-based Checkup and Herbal Prescripition Recommendation System</div>

<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Email: <?php echo $_SESSION['user_email']; ?></p>
      
      <a href="form_upload.php">Upload a picture</a></p>
      
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>