<?php
session_start();
include('config.php');
$id=$_SESSION['user_name'];

$sql_session = " SELECT * FROM user_form WHERE user_name = '$id'";

   $result_session = $conn -> query($sql_session);
   $row_session=$result_session->fetch_assoc();



?>